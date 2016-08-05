<!DOCTYPE html>
<html>
<head>
	<style>
		
		body
		{
			background-color:#3333ff;
		}
		label
		{ 
			font-family: Gabriola;
			color: #FFF;
			font-size: 90px;
			position: absolute;
			top: 100px;
			left: 490px;
		}

		#id1
		{
			position:absolute;
			top:300px;
			left:52%;
			transform: translate(-50%, -50%);
		}
		input[type="number"],input[type="submit"]
		{
			height: 50px;
			width: 700px;
			font-size: 20px;
			border-width: 0px;
		}
		input[type="submit"]
		{
			position:relative;
			height: 52px;
			top:-52.5px;
			left:584px;
			width:120px;
			background-color: #7323dc;
			text-align: center;
			color:white;
		}
		input[type="submit"]:hover
		{
			color: black; 
		}

		input[type=number]::-webkit-inner-spin-button, input[type=number]::-webkit-outer-spin-button
		{ 
			-webkit-appearance: none; 
			margin: 0; 
		}
	</style>
</head>
<body>
	<form action="#" method="POST">
		<label>Enter User Id</label>
		<div id="id1">
			<input type="number"  name="user_id" min="1" max="100" maxlength="10" placeholder="  ENTER ID">
			<input type="submit" value="DELETE" name="del" id="abc">
		</div>
	</form>
</body>
<?php
if(isset($_POST["del"]))
{
	$id=$_POST["user_id"];
	$cons=mysqli_connect("localhost","root","12345","web");
	//echo "success";
	$sql = "SELECT USER_ID FROM users where USER_ID='$id'";
	$result = $cons->query($sql);
	if ($result->num_rows > 0)
	{
		while($row = $result->fetch_assoc())
		{
			$res=mysqli_query($cons,"delete from users where USER_ID='$id'");
			echo '<script>alert("user deleted");</script>';
		}
	}
	else 
	{
		echo '<script>alert("user not found");</script>';
	}
}
?>
</html>

