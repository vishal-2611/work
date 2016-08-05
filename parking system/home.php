<?php
session_start();
if(!isset($_SESSION["user"]))
{
	header("location:login.php");
}
?>
<!DOCTYPE html>
<html>
<head>
<style>
body {
  font-family: Arial, sans-serif;
  background: url(img/car.jpg) no-repeat;
  background-size: cover;
  height: 100vh;
}
	.cl
	{
		height: 200px;
		width:200px;
		border-radius: 30px;
		position: relative;
			top: 1px;
			left: 40px;
			background-image: url("img/add.png");
	}
	.cl:hover
	{
		border-color: #2090FF;
	}
	.cl1
	{
		height: 200px;
		width:200px;
		border-radius: 30px;
		position: relative;
			top: 1px;
			left: 40px;
			background-image: url("img/deluser.png");
	}
	.cl1:hover
	{
		border-color: #2090FF;
	}
	.cl4
	{
		height: 200px;
		width:200px;
		border-radius: 30px;
		position: relative;
			top: 1px;
			left: 50px;
			background-image: url("img/car_park.png");
	}
	.cl4:hover
	{
		border-color: #2090FF;
	}
	#id1
	{
		height:300px;
		width:1080px;
		//background-color:red;
		position: relative;
		top:300px;
		left:635px;
		transform: translate(-50%, -50%);
	}
	.cl2
	{
		position: relative;
		top: -5px;
		left: 70px;
	}
	.cl3
	{
		position: relative;
		top: -5px;
		left: 106px;
	}
	.cl5
	{
		position: relative;
		top: -5px;
		left: 113px;
	}
	label
	{
	 	font-family: Gabriola;
		color: #fff;
		font-size: 30px;
		 }
	td
	{
		padding: 25px;
	}
	input[type="submit"]
		{
			width:200px;
			height:200px;
			border-radius: 30px;
			position: relative;
			top: 1px;
			left: 50px;
			background-image: url("img/logout.png");

		}
</style>
</head>
<body>
		<div id="id1">
			<table>
				<tr>
					<td><button onclick="window.location.href='new_user.php'" class="cl" name="user"></button></td>
					<td><button onclick="window.location.href='user.php'" class="cl1"></button></td>
					<td><button onclick="window.location.href='park.php'" class="cl4" name="user"></button></td>

					<td >
						<form action="logout.php" method="post">
							<input type="submit" value="" class="cl" name="login" id="logout">
						</form>
					</td>
					
				</tr>
				<tr>
					<td><label class="cl2">ADD NEW USER</label></td>
					<td><label class="cl2">DELETE USER</lable></td>
					<td><label class="cl3">PARKING</lable></td>
					<td><label class="cl5">LOGOUT</lable></td>
				</tr>
			</table>
		</div>
	</body>
	</html>