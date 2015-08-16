import requests
import bs4
import sys

#root_url = 'http://pyvideo.org'
#index_url = 'https://www.youtube.com/results?search_query=sdf'
index_url = sys.argv[1]
def get_video_page_urls():
    response = requests.get(index_url)
    soup = bs4.BeautifulSoup(response.text)
    return [a.attrs.get('title') for a in soup.select('div#results ol.section-list li li div.yt-lockup.yt-lockup-tile.yt-lockup-video.vve-check.clearfix.yt-uix-tile div.yt-lockup-content h3.yt-lockup-title a')]

#print(get_video_page_urls())
for i in get_video_page_urls():
	print i


'''
id="section-list-964324"
id=results'''
