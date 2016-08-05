<html>
<head>
 <style>
		body
		{
		background-color: #DCD6D6;
		}
		.cl
		{
			height: 35px;
			width:280px;
			border-radius: 6px;
		}
		#id1
		{
			height:400px;
			width:420px;
			background-color: #E8E3E3;
			position: absolute;
			top:50%;
			left:50%;
			transform: translate(-50%, -50%);
			border : 3px dashed #FFF4C8;
			border-radius: 5px;
		}
		#id1>table
		{
			width:auto;
			display: block;
			position: absolute;
			top:50%;
			left:50%;
			transform: translate(-50%, -50%);
			//background-color: #ccffff;
		}
		td
		{
			padding: 5px;
		}
		td>label
		{
			font-size: 20px;
		}
		input[type="submit"],input[type="text"],input[type="tel"],input[type="email"]
		{
			font-size: 15px;
		}
		input[type="submit"]
		{

		}
		#id2
		{
			height:50px;
			width:270px;
			background-color: white;
			position: relative;
			top:19.4%;
			left:50%;
			transform: translate(-50%, -50%);
			z-index: 10;
		}
		input[type=number]::-webkit-inner-spin-button, input[type=number]::-webkit-outer-spin-button
		{ 
			-webkit-appearance: none; 
			margin: 0; 
		}

		//
.box {
  width: 20%;
  margin: 0 auto;
  background: rgba(255,255,255,0.2);
  padding: 35px;
  border: 2px solid #fff;
  border-radius: 20px/50px;
  background-clip: padding-box;
  text-align: center;
}


.overlay {
  position: absolute;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  background: rgba(0, 0, 0, 0.7);
  transition: opacity 500ms;
  visibility: hidden;
  opacity: 0;
}
.a {
  visibility: visible;
  opacity: 1;
  z-index:200;
}

.popup {
  margin: 70px auto;
  padding: 20px;
  background: #fff;
  border-radius: 5px;
  width: 30%;
  position: relative;
  transition: all 5s ease-in-out;
  margin-top: 210px;
}

.popup h2 {
  margin-top: 0;
  color: #333;
  font-family: Tahoma, Arial, sans-serif;
}
.popup .close {
  position: absolute;
  top: 20px;
  right: 30px;
  transition: all 200ms;
  font-size: 30px;
  font-weight: bold;
  text-decoration: none;
  color: #333;
}
.popup .close:hover {
  color: orange;
}
.popup .content {
  max-height: 30%;
  overflow: auto;
}

	</style>
	<script src="js/jquery-2.2.3.min.js"></script>
	<script>
		$(document).ready(function(){
			$('#submit').on('click',function(){
				var data = $(".form1").serializeArray();
				$.post('new_user_php.php',data,function(response){
					$("#popup1").addClass("a");
					$(".content").html(response);
					$(".form1").trigger('reset');
				});
				return false;	
			});
			$('.close').on('click',function(){
				$("#popup1").removeClass("a");
			});
		});
	</script>
</head>
<body>
<div id="popup1" class="overlay">
	<div class="popup">
		<a class="close" href="#">×</a>
		<div class="content">
		</div>
	</div>
</div>
<center><h1 style="color:#00BFFF; font-family: cursive; font-weight: 700; margin-top:40px; ">REGISTRATION</h1></center>

	<form class="form1">
		<div id="id1">
			<table>
				<tr>
					<td><lable>NAME</lable></td>
					<td><input type="text" class="cl" name="user"></td>
				</tr>
				<tr>
					<td><lable>MOBILE</lable></td>
					<td><input type="number" maxlength="10"  min="1000000000" max="9999999999" class="cl"  name="mno"></td>
				</tr>
				<tr>
					<td><lable>PASSWORD</lable></td>
					<td><input type="password" class="cl"  name="pas"></td>
				</tr>
				<tr>
					<td><lable>E-mail</lable></td>
					<td><input type="email" class="cl"  name="email"></td>
				</tr>
				<tr>
					<td colspan="2"style=" text-align:center;"><input type="submit"  value="SUBMIT" name="enter" id="submit"></td>
				</tr>
			</table>
		</div>
	</form>
</body>
</html>
