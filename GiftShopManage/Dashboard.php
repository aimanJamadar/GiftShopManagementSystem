<?php
ob_start();
session_start(); 
include 'server.php';
include 'header.php';
if($_SESSION["user"]==null)
{
      header("Location: Home.php");
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Admin Dashboard</title>
	<style type="text/css">
		body
		{
			margin: 0;

		}
		h2{
			color: #0082e6;
			text-align: center;
			padding-top: 20px;
			padding-bottom: 10px;
		}

		#imgcontainer {
		 /* text-align: right;
		  margin: 10px;*/
		  float:right; 
          background:white; 
          width:50%; 
          height:500px;
          padding: 20px;
		}
		#para {
			float: left;
			background:white;
			margin: 20px;
			width: 40%;
			height: 200px;
			padding: 20px;
			font-size: 20px;
			text-align: center;
			border: 5px solid #507E9C;
		}
		img.avatar {
		  width: 100%;
		 
		}
		.Features{
			text-align: left;
			padding-left: 90px;
			font-size: 20px;
		}
		#pright{
			width: 40%;
			height: 200px;
			background: white;
			float: left;
			margin-left: 20px;
			margin-bottom: 10px;
			padding: 20px;
			padding-bottom: 7px;
			text-align: center;
			border: 5px solid #507E9C;
		}

	</style>
</head>
<body>
	
	 <div id="imgcontainer">
	 <img src="gift.jpg" alt="Avatar" class="avatar">
	</div>
	<div id="para">
	<h2>Gift Shop Management System</h2>
	The main aim of this Gift Shop Management System is to manage the details of gifts, stocks, sales, gift types, customers. The purpose of the project is to build an application program to reduce the manual work for managing the gifts, stocks, inventory, sales. 

	</div>
	<div id="pright">
		<h2 style="padding: 10px;">Features of Project</h2>
	<div class="Features">
	Login & Logout facility<br>
	Admin Login to maintain security<br>
	Selling Items<br>
	Managing Items<br>
	Managing Billing Report<br>
</div>
	</div>
</body>
</html>