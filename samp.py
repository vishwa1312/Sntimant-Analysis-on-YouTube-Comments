import csv
import re
import sys

from nltk.classify.scikitlearn import SklearnClassifier
from sklearn.svm import LinearSVC

from gdata.youtube import service

def get_stop_word_list(stopWordListFileName):
	stopWords=[]
	fp=open(stopWordListFileName,'r')
	line=fp.readline()
	
	while line:
		word=line.strip()
		stopWords.append(word)
		line=fp.readline()
		
	fp.close()
	return stopWords
	
stopWords=get_stop_word_list('stopword.txt')


def process_comm(comm):
	comm=comm.lower()
	comm=re.sub('((www\.[\s]+)|(https?://[^\s]+))','URL',comm)
	comm=re.sub('@[^\s]+','AT_USER',comm)
	comm=re.sub('[\s]+', ' ',comm)
	comm=re.sub('[,]', '', comm)
	comm=re.sub('[.]', '',comm)
	comm=re.sub(r'#([^\s]+)',r'\1',comm)
	comm=comm.strip('\'"')
	return comm
	
	
def get_features_from_comm(comm):
	tokens=process_comm(comm).split()
	return dict((w,True) for w in tokens)
	
def get_train_features_from_comms(comms,pos_neg):
	comm_features=[]
	for comm in comms:
		features=get_features_from_comm(comm)
		comm_features.append((features,pos_neg))
	return comm_features
	
	
pos_comms=[]
neg_comms=[]

raw_comms=csv.reader(open('MYFILE.csv','rb'),delimiter=',')
comms=[]

for row in raw_comms:
	sentiment=row[1]
	comm=row[0]
	item=(comm,sentiment)
	comms.append(item)
	
	if sentiment=="positive":
		pos_comms+=item
	else:
		neg_comms+=item
		
	
negcutoff, poscutoff = len(neg_comms)*4/5, len(pos_comms)*4/5
pos_train, pos_test = pos_comms[:poscutoff], pos_comms[poscutoff:]	
neg_train, neg_test = neg_comms[:negcutoff], neg_comms[negcutoff:]

neg_feats_train=get_train_features_from_comms(neg_train, 'neg')
pos_feats_train=get_train_features_from_comms(pos_train,'pos')

train_feats= neg_feats_train + 	pos_feats_train

svm_classifier= SklearnClassifier(LinearSVC())
svm_classifier.train(train_feats)

correct, wrong =0 ,0 

for comm in neg_test:
	features = get_features_from_comm(comm)
	result=svm_classifier.classify(features)
	if result == "neg":
		correct +=1
	else :
		wrong +=1
		
		
for comm in pos_test:
	features = get_features_from_comm(comm)
	result=svm_classifier.classify(features)
	if result == "pos":
		correct +=1
	else :
		wrong +=1
		
	
	
#print "Accuracy : {}".format(correct/float(correct + wrong))


#fh=open("pp.txt", 'r')


VIDEO_ID = sys.argv[1]

def comments_generator(client, video_id):
    comment_feed = client.GetYouTubeVideoCommentFeed(video_id=video_id)
    while comment_feed:
        for comment in comment_feed.entry:
             yield comment
        next_link = comment_feed.GetNextLink()
        if next_link is None:
             comment_feed = None
        else:
             comment_feed = client.GetYouTubeVideoCommentFeed(next_link.href)

client = service.YouTubeService()

neg_c=0
pos_c=0
tot=0

for comment in comments_generator(client, VIDEO_ID):
    author_name = comment.author[0].name.text
    text = comment.content.text
    text=str(text)
    
    com=process_comm(text)
    features = get_features_from_comm(com)
    result=svm_classifier.classify(features)
    if result == "pos":
	pos_c +=1
    else :
	neg_c +=1
		
    tot +=1
	#print line
	#print result
	
	
print neg_c
print pos_c

#print tot


#print neg_p
#print pos_p




    



''' 
comm="worstovie ever"
print svm_classifier.classify(get_features_from_comm(comm))
'''
	
	
	
	
	










