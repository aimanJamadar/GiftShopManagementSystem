<?php
include 'header.php';
include 'server.php';
ob_start();
session_start();
if($_SESSION["user"]==null)
{
      header("Location: Home.php");
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>About us</title>
	<style type="text/css">
		body{
			margin: 0;
		}
		.Para{
			padding: 0px;
			width: 45%;
			text-align: center;
			margin: 0px;
			font-size: 25px;
			float: left;
			
		}
		h2{
			color: #0082e6;
		}
		#imgcontainer {
		 /* text-align: right;
		  margin: 10px;*/
		  float:right; 
          background:white; 
          width:45%; 
          height:500px;
          padding: 0px;
		}
	</style>
</head>


<body>
	<div class="Para" style="padding-right: 20px;">
		<h2>About Us</h2>
	<p>
	‘Organization Name’

When you purchase from us, regardless of whether on the web or in the shop, you are keeping up the service and texture of the company name.

Benefits from the ‘Company Name’ Shop are gift-helped to ‘Company Name’ .”Organization Name’ depends essentially on traveler pay as it gets no subsidizing from outside. It costs over $10 million every year to run the shop, and pay from guests (through tickets, retail and cooking) keeps up our UNESCO World Heritage site. Notwithstanding support and consistently running costs, the shop likewise utilizes salary for protection ventures, including significant reclamation work, the advancement of instruction and music projects, and work to enhance and improve the experience of guests and explorers to the shop.

The shop moves numerous select reaches propelled by the design wonder and heavenly inside of ‘Company Name’ ; keepsake and reference books on ‘Company Name’ , religion, the government and New York; CDs of the ‘Company Name’ Choir, and a wide assortment of trinkets to help guests to remember their time at ‘Company Name’ and in Manhattan.

</p>
</div>
 <div id="imgcontainer">
	 <img src="gift.jpg" alt="Avatar" class="avatar" style="width: 600px; height: 500px; padding-top: 60px; padding-right: 50px;">
	</div>
</body>
</html>