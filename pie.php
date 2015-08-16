

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
<form action="pie.php" method="GET">
           <input type="text" data-animation="scale-down" id="my-text-box" data-icon="icon-camera"
                  data-mask="Type here" name="search12" placeholder="search by id" style="width:150px; height:12px; margin-left:600px; margin-top:82px;font-size:12px" required />
            <input type="submit" name="search11" value="search" class="bk_nw1" /></form>

</div>

<div class="form_panel"><br>
    
    

         
    </div>
</div>
<div class="show_room">
<div id="nav11">

</div>

<div id="section11"><br>
<?php
function getYouTubeIdFromURL($url)
{
  $url_string = parse_url($url, PHP_URL_QUERY);
  parse_str($url_string, $args);
  return isset($args['v']) ? $args['v'] : false;
}

$youtube_id = getYouTubeIdFromURL($_GET['name']);
if($youtube_id=="")
{
	$youtube_id=$_GET['search12'];
}
/*echo $_GET['name'];
echo "<br>";
echo $youtube_id;*/
echo '<center><iframe width="560" height="315" style="border: outset #000000 10px;" src="http://www.youtube.com/embed/'.$youtube_id.'" frameborder="0" allowfullscreen></iframe></center>';
exec( "python samp.py ".$youtube_id, $output, $return );
sleep(1);
$neg=$output[0];
$pos=$output[1];
/*echo $neg;
echo $pos;*/
?>

<div id="piechart_3d" style="width: 800px; height: 500px; margin-left:140px;"></div>

<script type="text/javascript" src="https://www.google.com/jsapi"></script>
    <script type="text/javascript">
    var neg = parseInt("<?php echo $neg; ?>");
        //alert(neg);
        
     var pos = parseInt("<?php echo $pos; ?>");
        //alert(pos);
        
     google.load("visualization", "1", {packages:["corechart"]});
      google.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Sentiment', 'Percentage'],
          ['Positive', pos],
          ['Negative', neg]
        ]);

        var options = {
          title: 'Analysis',
          is3D: true,
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart_3d'));
        chart.draw(data, options);
      }
</script>


</div>

<div id="nav12">

</div>
<div id="footer">

</div>



</div>




</body>




</html>

