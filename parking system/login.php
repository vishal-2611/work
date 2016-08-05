<?php
session_start();
if(isset($_SESSION["user"]))
{
	header("location:home.php");
}
?>
<!DOCTYPE html>
<html>
<head>
	<style>
		.background-image {
			position: fixed;
			left: 0;
			right: 0;
			z-index: 0;
			background-image: url("img/parking.jpg");
			width: 100%;
			height: 100vh;
			background-size: 100% 100%;
			background-repeat: no-repeat;
			-webkit-filter: blur(2px);//chrome
			-moz-filter: blur(2px);
			-o-filter: blur(2px);
			-ms-filter: blur(2px);
			filter: blur(2px);
		}
		.cl
		{    
			height: 35px;
			width: 280px;
			border-radius: 6px;
		}
		#id1
		{
			height:250px;
			width:40%;
			background-color:#A2B5CD;
			position: absolute;
			top:50%;
			left:50%;
			transform: translate(-50%, -50%);
			border-width: 1px;
			border:1px solid black;
			border-radius:150px;
		}
		#id1>table
		{
			width:auto;
			display: block;
			position: absolute;
			top:50%;
			left:50%;
			transform: translate(-50%, -50%);

		}
		td
		{
			padding: 5px;
		}
		td>label
		{
			font-size:20px;
		}
		input[type="submit"]
		{
			width:100px;
			height:30px;
			border-radius: 50px 50px;
			border-color:#1D7CF2;
		}
		input[type="submit"]:hover
		{
			background-color: #1D7CF2;
			color:white;
		}
		input[type="submit"],input[type="text"]
		{
			font-size:15px;
		}
	</style>
</head>
<body>
	<div class="background-image"></div>
	<form action="login_php.php" method="post">
		<div id="id1">
			<table>
				<tr>
					<td><label>Username</label></td>
					<td><input type="text" class="cl" name="user"></td>
				</tr>
				<tr>
					<td><label>Password</label></td>
					<td><input type="password" class="cl" name="pass"></td>
				</tr>
				<tr>
					<td colspan="2"style=" text-align:center;"><input type="submit" name="login" ></td>
				</tr>
			</table>
		</div>
	</form>
</body>
</html>