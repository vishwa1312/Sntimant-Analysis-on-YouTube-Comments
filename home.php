<!DOCTYPE html>
<html>

<head>
<link rel="shortcut icon" href="senti.png">
<title>SenTube</title>

<style>
#header {
    
    color:white;
    text-align:center;
    padding:5px;
    height: 100px
}
#nav {
    line-height:30px;
    background-color:#eeeeee;
    height:50px;
    width:1275px;
    float:left;
    padding:5px;        
}

#footer {
    background-color:#cd592c;
    color:white;
    clear:both;
    text-align:center;
   padding:5px;    
}
#navbar {
width:100%;
height:120px;
background-color:#eeeeee;
}

#navbar ul {
width:100%;
margin:0 auto 0 auto;
}

#navbar ul li {
float:left;
color:black;
padding:0 40px 0 40px;
height:80px;
list-style:none;
display:block;
line-height:80px;
text-align:center;
cursor:pointer;
}
.form_panel
{width:100%;
height:100px;
background-color: #C4B28F;
border-color: #cd592c;


}

.title_of_form
{width:100%;
height:40px;
float:left;
/*background-color:#999;*/}

.title_of_form p
{color:#666666;
text-align:left;
font-family:Arial, Helvetica, sans-serif;
font-weight:500;
font-size:20px;
margin-top:10px;
margin-left:15px;}

.form_heading
{color:brown;
font-family:Arial, Helvetica, sans-serif;
font-size:13px;
font-weight:bold;
}



.bk_nw
{width:120px;
height:30px;
background-color:#cd592c;
color:#FFF;
margin-right:200px;
margin-top:10px;
font-family:Arial, Helvetica, sans-serif;
font-size:13px;
float:right;
position: absolute;}

.bk_nw1
{width:60px;
height:20px;
background-color:#cd592c;
color:#FFF;
margin-right:200px;
margin-top:80px;
font-family:Arial, Helvetica, sans-serif;
font-size:13px;
float:right;
position: absolute;
}
.show_room
{
    width:100%;
    height: auto;
    
}
#nav11 {
    line-height:30px;
    
    height:900px;
    width:10%;
    float:left;
    padding:5px;    
    background-image:url(form_bg.jpg);

         
}
#section11 {
    width:76.8%;
    float:left;
    padding:10px;   
    height: auto;     
}
#nav12 {
    line-height:30px;
    
    height:900px;
    width:10%;
    float:left;
    padding:5px;
   
background-image:url(form_bg.jpg);}

    #nav22 {
    line-height:30px;
    background-color:#C4B28F;
    height:300px;
    width:200px;
    float:left;
    padding:5px;  
    margin-left: 10px;        
}
#section22 {
    width:200px;
    float:left;
    padding:5px;
    height:250px; 
    background-color:#C4B28F;
    margin-left: 30px;       
}
#nav22 {
    line-height:30px;
    background-color:#C4B28F;
    height:250px;
    width:200px;
    float:left;
    padding:5px;
margin-left: 30px;}

#header33{
    background-color:#C4B28F;
    color:white;
    text-align:center;
    padding:5px;
    height: 100px;
    width: 679px;
    margin-top: 10px;
}

#section33 {
    width:350px;
    float:left;
    
     
    height: auto;
    width: auto;      
}
#imgid1{
    margin-left: 50px;
    margin-top: 10px;
  
}

#bar22{
    background-color:#C4B28F;
    color:back;
    font-size: 20px;
    text-align:left;
    padding:5px;
    height: 100px;
    width: 890px;
    margin-top: 300px;
    margin-left: 30px;
    position: absolute;
    font-family: Helvetica, sans-serif;
}

#feature{
    background-color:#cd592c;
    color:white;
    text-align:center;
    padding:5px;
    height: 20px;
    width: 300px;
    margin-top: 430px;
    margin-left: 30px;
    position: absolute;
    z-index: 1;

}

#feature1{
    background-color:#cd592c;
    color:white;
    text-align:left;
    font-size: 13px;
    padding:5px;
    height: 12px;
    width: 120px;
    margin-top: 30px;
    margin-left: 30px;
    position: absolute;
    z-index: 1;
    line-height: 10px;
    

}

#feature2{
    background-color:#cd592c;
    color:white;
    text-align:left;
    font-size: 13px;
    padding:5px;
    height: 12px;
    width: 120px;
    margin-top: 30px;
    margin-left: 270px;
    position: absolute;
    z-index: 1;
    line-height: 10px;
    

}
#feature3{
    background-color:#cd592c;
    color:white;
    text-align:left;
    font-size: 13px;
    padding:5px;
    height: 12px;
    width: 120px;
    margin-top: 30px;
    margin-left: 510px;
    position: absolute;
    z-index: 1;
    line-height: 10px;
    

}
#details{
    background-color:#C4B28F;
    color:black;
    font-size: 20px;
    text-align:left;
    padding:5px;
    height: 500px;
    width: 890px;
    margin-top: -504px;
    margin-left: 30px;
    position: absolute;
    font-family: Helvetica, sans-serif;
    z-index: 2;
    display: none;
}
#footer{
    width: 1260px;
    height: 40px;
    background-color: #C4B28F;
    text-align: center;
    font-size: 15px;
    color: black;
    line-height: 50px;
}



</style>
<script type="text/javascript">
          $(document).ready(function () {
              $('input#my-text-box').ftext();
          });
    </script>


</head>

<body>





<div id="header">

<img id="sentube" src="sentube.png"  style="position: absolute; top: -30px; left: 120px; width:180px;height:200px "/>
<form action="pie1.php" method="GET">
           <input type="text" data-animation="scale-down" id="my-text-box" data-icon="icon-camera"
                  data-mask="Type here" name="search12" placeholder="search by id" style="width:150px; height:12px; margin-left:600px; margin-top:82px;font-size:12px" required/>
            <input type="submit" name="search11" value="search" class="bk_nw1" /></form>

</div>

<div class="form_panel"><br>
    
    

              

<form action="home.php" method="GET">
           <input type="text" data-animation="scale-down" id="my-text-box" data-icon="icon-camera" value="<?php  echo $_GET['search1']  ?>"
                  data-mask="Type here" name="search1" style="width:600px; height:25px; margin-left:200px; margin-top:10px;font-size:20px" required/>
            <input type="submit" name="search" value="search" class="bk_nw" /></form>
  
    </div>
</div>
<div class="show_room">
<div id="nav11">

</div>

<div id="section11"><br>

<?php
if(isset($_GET['search']))
{

$srch=$_GET['search1'];

$temp='https://www.youtube.com/results?search_query='.$srch;
$temp = str_replace(' ', '+', $temp);
exec("python bs1.py ".$temp,$output,$return);
//print_r($output);
$count_op=count($output);

/*foreach ($output as $key => $value) {
    echo $value.'<br>';
}*/

exec("python bs2.py ".$temp,$output1,$return);
//print_r($output1);
$count_op1=count($output1);
/*foreach ($output1 as $key => $value) {
    echo $value.'<br>';
}*/
exec("python bs3.py ".$temp,$output2,$return);
//print_r($output2);
$count_op2=count($output2);
/*foreach ($output2 as $key => $value) {
    echo $value.'<br>';

}*/
for ($i = 0; $i < $count_op; $i++) {
    if( preg_match('/\.(jpg|jpeg|png|webp)(?:[\?\#].*)?$/i', $output1[$i], $matches) ) {
    // matching file extensions are in $matches[1]
        $image='https:'.$output1[$i];
       //echo 'https:'.$tag->getAttribute('src');
        
      /* echo '<br><br>';
      echo '<img id="imgid1" src="'.$image.'" alt="no img found" style="position: relative; top: 0; left: 0; border:5px solid #021a40;">';
      if($output2=='')
        {echo "name not found";}
      else
        echo '&nbsp<b><a href="" id="text_" style="font-size:20px;font-family:Times, serif;position:absolute;">'.$output2[$i].'</a><b>';
      }*/
      echo '<br><br>';
      echo '<div style="width:400px;padding:10px;"><img id="imgid1" src="'.$image.'" alt="no img found" style="position: relative; top: 0; left: 0; border: ridge #708090 13px;"></div>';
      if(empty($output2[$i]))
        {
         echo '<div style="margin-left:450px;margin-top:-180px;z-index:999;position:absolute;width:700px;"><b><a href="pie.php?name=https://www.youtube.com'.$output[$i].'" id="text_" style="font-size:20px;font-family:Times, serif;position:absolute;">'.$srch.$i.'</a><b></div>';
        }
      else
        echo '<div style="margin-left:450px;margin-top:-180px;z-index:999;position:absolute;width:700px;"><b><a href="pie.php?name=https://www.youtube.com'.$output[$i].'" id="text_" style="font-size:20px;font-family:Times, serif;position:absolute;">'.$output2[$i].'</a><b></div>';
      }
}



}
?>  
   




</div>

<div id="nav12">

</div>
<div id="footer">

</div>



</div>




</body>




</html>

