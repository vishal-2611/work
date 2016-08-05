<!DOCTYPE html>
<html>
<head>
	<style>
	body {
    background-color: #ECF0F1;
}
		#id1
		{
			height:165px;
			width:320px;
			background-color:#DCD6D6;
			position: absolute;
			top:100px;
			left:174px;
			border-width: 1px;
			 border-right: 2px dashed white;
			 border-top: 2px dashed white;
			}

			#id2
		{
			height:165px;
			width:320px;
			background-color:#DCD6D6;
			position: absolute;
			top:100px;
			left:825px;
			border-width: 1px;
			border-left:2px dashed white;
			 border-top: 2px dashed white;
			}

		#id3
		{
			height:165px;
			width:320px;
			background-color:#DCD6D6;
			position: absolute;
			top:405px;
			left:174px;
			border-width: 1px;
			border-right:2px dashed white;
			 border-bottom: 2px dashed white;
			}

			#id4
		{
			height:165px;
			width:320px;
			background-color:#DCD6D6;
			position: absolute;
			top:405px;
			left:825px;
			border-width: 1px;
			border-left:2px dashed white;
			 border-bottom: 2px dashed white;
			}
			#id5
		{
			height:20px;
			width:971px;
			background-color:#C4BABA;
			position: absolute;
			top:74px;
			left:174px;
			border-width: 1px;
			border:1px solid black;
			}

			#id6
		{
			height:471px;
			width:971px;
			background-color:#E8E3E3;
			position: absolute;
			top:100px;
			left:174px;
			border-width: 1px;
			//border:1px solid black;
			z-index: -1;
			}

			#id11
		{
			height:165px;
			width:320px;
			background-color:#DCD6D6;
			background-image: url(img/car1.png) ;
			background-repeat: no-repeat;
			position: absolute;
			top:100px;
			left:174px;
			border-width: 1px;
			 border-right: 2px dashed white;
			 border-top: 2px dashed white;
			}


			#id21
		{
			height:165px;
			width:320px;
			background-color:#DCD6D6;
			background-image: url(img/car2.png) ;
			background-repeat: no-repeat;
			position: absolute;
			top:100px;
			left:825px;
			border-width: 1px;
			border-left:2px dashed white;
			 border-top: 2px dashed white;
			}

			#id31
		{
			height:165px;
			width:320px;
			background-color:#DCD6D6;
			background-image: url(img/car1.png) ;
			background-repeat: no-repeat;
			position: absolute;
			top:405px;
			left:174px;
			border-width: 1px;
			border-right:2px dashed white;
			 border-bottom: 2px dashed white;
			}

				#id41
		{
			height:165px;
			width:320px;
			background-color:#DCD6D6;
			background-image: url(img/car3.png) ;
			background-repeat: no-repeat;
			position: absolute;
			top:405px;
			left:825px;
			border-width: 1px;
			border-left:2px dashed white;
			 border-bottom: 2px dashed white;
			}

.transparent-circle {
    display:block;
    border: 3px solid white;
    height:70px;
    width:70px;
    -webkit-border-radius:75px;
    -moz-border-radius:75px;
line-height:70px;
text-align:center;
color:white;
position:absolute;
top:-10px;
left:112px;
z-index: 10;
}


	</style>
</head>
<body>
<center><h1 style="color:#00BFFF; font-family: cursive; font-weight: 700; ">PARKING</h1></center>

<div id="id5"></div>
<div id="id6"></div>
</body>


<?php
$url=$_SERVER['REQUEST_URI'];
header("Refresh: 5; URL=$url");
$con=mysqli_connect("localhost","root","12345","web");
$query1=mysqli_query($con,"select * from slot WHERE id=1");
$query2=mysqli_query($con,"select * from slot WHERE id=2");
$query3=mysqli_query($con,"select * from slot WHERE id=3");
$query4=mysqli_query($con,"select * from slot WHERE id=4");

$result1=mysqli_fetch_array($query1);
$result2=mysqli_fetch_array($query2);
$result3=mysqli_fetch_array($query3);
$result4=mysqli_fetch_array($query4); 
if($result1[3]==0)
{
	echo "<div id='id1'><p class='transparent-circle' style='font-size: 50px;'>1</p></div>";
}
else
{

 echo	"<div id='id11'><p class='transparent-circle' style='font-size: 50px;'>1</p></div>";
}
if($result2[3]==0)
{
	echo "<div id='id2'><p class='transparent-circle' style='font-size: 50px;'>2</p></div>";
}
else
{

 echo	"<div id='id21'><p class='transparent-circle' style='font-size: 50px;'>2</p></div>";
}

if($result3[3]==0)
{
	echo "<div id='id3'><p class='transparent-circle' style='font-size: 50px;'>3</p></div>";
}
else
{

 echo	"<div id='id31'><p class='transparent-circle' style='font-size: 50px;'>3</p></div>";
}

if($result4[3]==0)
{
	echo "<div id='id4'><p class='transparent-circle' style='font-size: 50px;'>4</p></div>";
}
else
{

 echo	"<div id='id41'><p class='transparent-circle' style='font-size: 50px;'>4</p></div>";
}
?>
</html>