<?php
session_start();
echo '<table><thead><tr> <th>User Id</th> <th>Name</th> <th>Mobile</th><th>Delete</th></tr></thead>';
if($_SESSION["user"]!="admin")
{
	echo '<tr><td colspan=4>you are not gooduaseer</td></tr>';
}
else
{
$con=new mysqli("localhost","root","12345","web");
$sql="select * from users";
$result=$con->query($sql);

if($result->num_rows > 0)
{
	
	while($row=$result->fetch_assoc())
	{
		echo '<tr><td>'.$row["user_id"].'</td><td>'.$row["name"].'</td><td>'.$row["mo_number"].'</td><td><input type="submit" value="Delete" id='.$row["user_id"].' style="cursor:pointer"></td></tr>';
	}
	
}
else
	echo '<tr><td colspan=4>No Record To Display</td></tr>';
}
	echo '</table>';
?>
