<?php
session_start();
if(!isset($_SESSION["user"]))
{
	header("location:login.php");
}
?>
<html>
<head>
	<script src="js/jquery-2.2.3.min.js"></script>
	<script>
		$(document).ready(function(){
			$.ajaxSetup({cache:false});
			setInterval(function(){$(".view").load('user_php.php');},1000);	

			//for delete
			$('.view').on('click','input[type="submit"]',function(){
				var activeid=$(this).attr("id");
				$.post('delete.php',{id:activeid});
				return false;
			});
		});
	</script>
	<style>
		@import url(http://fonts.googleapis.com/css?family=Patua+One|Open+Sans);
		* {
			-moz-box-sizing: border-box;
			-webkit-box-sizing: border-box;
			box-sizing: border-box;
		}

		body {
			background: #353a40;
		}

		table {
			border-collapse: separate;
			background: #fff;
			-moz-border-radius: 5px;
			-webkit-border-radius: 5px;
			border-radius: 5px;
			margin: 30px auto;
			-moz-box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.3);
			-webkit-box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.3);
			box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.3);
		}

		thead {
			-moz-border-radius: 5px;
			-webkit-border-radius: 5px;
			border-radius: 5px;
		}

		thead th {
			font-family: 'Patua One', cursive;
			font-size: 16px;
			font-weight: 400;
			color: #fff;
			text-shadow: 1px 1px 0px rgba(0, 0, 0, 0.5);
			text-align: left;
			padding: 20px;
			background-image: -webkit-gradient(linear, 50% 0%, 50% 100%, color-stop(0%, #646f7f), color-stop(100%, #4a5564));
			background-image: -moz-linear-gradient(#646f7f, #4a5564);
			background-image: -webkit-linear-gradient(#646f7f, #4a5564);
			background-image: linear-gradient(#646f7f, #4a5564);
			border-top: 1px solid #858d99;
		}
		thead th:first-child {
			-moz-border-radius-topleft: 5px;
			-webkit-border-top-left-radius: 5px;
			border-top-left-radius: 5px;
		}
		thead th:last-child {
			-moz-border-radius-topright: 5px;
			-webkit-border-top-right-radius: 5px;
			border-top-right-radius: 5px;
		}

		tbody tr td {
			font-family: 'Open Sans', sans-serif;
			font-weight: 400;
			color: #5f6062;
			font-size: 13px;
			padding: 20px 20px 20px 20px;
			border-bottom: 1px solid #e0e0e0;
		}

		tbody tr:nth-child(2n) {
			background: #f0f3f5;
		}

		tbody tr:last-child td {
			border-bottom: none;
		}
		tbody tr:last-child td:first-child {
			-moz-border-radius-bottomleft: 5px;
			-webkit-border-bottom-left-radius: 5px;
			border-bottom-left-radius: 5px;
		}
		tbody tr:last-child td:last-child {
			-moz-border-radius-bottomright: 5px;
			-webkit-border-bottom-right-radius: 5px;
			border-bottom-right-radius: 5px;
		}

		tbody:hover > tr td {
			filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=50);
			opacity: 0.5;
			/* uncomment for blur effect */
  /* color:transparent;
  @include text-shadow(0px 0px 2px rgba(0,0,0,0.8));*/
}

tbody:hover > tr:hover td {
	text-shadow: none;
	color: #2d2d2d;
	filter: progid:DXImageTransform.Microsoft.Alpha(enabled=false);
	opacity: 1;
}	

input[type="submit"] {
	background-color: transparent;
	border-width: 0;
	font-family: 'Open Sans', sans-serif;
	font-weight: 400;
	color: #5f6062;
	font-size: 13px;
}
</style>
</head>
<body>
	<center><h1 style="color:white; font-family:'Segoe Print'; font-style:oblique; margin-top: 30px">User Registered</style></h1></center>
	<div class="view">

	</div>
</body>
</html>

