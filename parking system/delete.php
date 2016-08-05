<?php
session_start();
if($_SESSION["user"]=="admin")
{
	header("location:login.php");
}
?>
<?php
$con=new mysqli("localhost","root","12345","web");
$id=$_POST["id"];
$sql="delete from users where USER_ID=$id";
$result=$con->query($sql);
?>