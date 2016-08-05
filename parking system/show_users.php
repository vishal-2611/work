<!DOCTYPE html>
<html>
<head>
	<title>Show users all users</title>
<style>
h1
{
	font-size:40px;
	text-align:center;
	color: red;
	font-family:"Lucida Sans Unicode";
	}
table td
{
font-size:20px;
color:green;	
	}
</style>
</head>
<body>
<div><h1>REGISTERED USER</h1></div>
<table border="1" align="center">
<tr>
<th>User ID</th>
<th>Name</th>
<th>Mobile NO.</th>
<th>Email ID</th>
</tr>
<?php
$con= mysqli_connect("localhost","root","12345","web");
$query=mysqli_query($con,"select * from users");
while($result=mysqli_fetch_array($query))
{
	$a=$result[0];
	$b=$result[1];	
	$c=$result[2];
	$d=$result[4];
?>
<?php echo "<tr>";
echo "<td>$a</td>"; 
echo "<td>$b</td>";
echo "<td>$c</td>";
echo "<td>$d</td>";
echo "</tr>"; }?>
</table>
</body>
</html>