<?php
	$name=$_POST["user"];
	$m_number=$_POST["mno"];
	$pass=$_POST["pas"];
	$e_mail=$_POST["email"];
	$cons=mysqli_connect("localhost","root","12345","web");
	if ($name=="")
	{
	
		echo "enter name";
	}
	else if(strlen($m_number)!=10)
	{
		echo "enter valid mobile number";
	}
	else if(!filter_var($e_mail, FILTER_VALIDATE_EMAIL))
	{
		echo "enter valid email";
	}
	else if(strlen($pass)<6)
	{
		echo "enter atleast 6 digit password";
	}

	else
	{
	$query=mysqli_query($cons,"insert into users(name,mo_number,password,E_mail_id) values('$name',$m_number,'$pass','$e_mail')");
	if($query)
	{
		//echo "success";
		$sql = "SELECT user_id FROM users where mo_number='$m_number'";
		$result = $cons->query($sql);
		if ($result->num_rows > 0) {
    // output data of each row
			while($row = $result->fetch_assoc()) {
				echo ('<div style="font-family:cursive; font-weight: 700; font-size:30px;"><center>SUCCESSFUL</center></div> <div style="margin-top:15px; color:#00BFFF; font-size:25px;"><center>USER ID '.$row["user_id"].' </center></div>');
			}
		} else {
			echo "0 results";
		}
	}
	else
	{
		echo"<div style='margin-top:20px;color:red;font-weight:bold;'>user not found </div>";
	}
}
?>