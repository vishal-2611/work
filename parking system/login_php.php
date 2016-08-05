
<?php
	$username=$_POST["user"];
	$password=$_POST["pass"];
	$con=mysqli_connect("localhost","root","12345","web");
	$query=mysqli_query($con,"select * from log_tab where username='$username' and password='$password'");
	$result=mysqli_fetch_array($query);
	if($result[0]==$username and $result[1]==$password)
	{
		 session_start();
   $_SESSION["user"]=$username;
		header("location:home.php");
	}
	else
	{
		echo  "WRONG PASSWORD OR USERNAME";
	}
?>