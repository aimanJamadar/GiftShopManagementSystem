<?php
include 'header.php';
include 'server.php';
ob_start();
session_start();
if($_SESSION["user"]==null)
{
      header("Location: Home.php");
}



if(isset($_POST['Add']))
{	

   $Cname=$_POST['Cname'];
   $Cmobile=$_POST['Cmobile'];
   $ProductName=$_POST['ProductName'];
   $Quantity=$_POST['Quantity'];
   $PPU=$_POST['PPU'];
   $Total=$_POST['Total'];
    $x="insert into Customerdetails(Cname,Cmobile,ProductName,Quantity,PPU,Total) 
    values('".$Cname."','".$Cmobile."','".$ProductName."','".$Quantity."','".$PPU."','".$Total."')";
    $i=mysqli_query($con, $x);
    if($i==1)
    {
        echo "<script>alert('Sell Inserted !');</script>";
    }
    else
    {
        echo "<script>alert('Sell Insert Fail !');</script>";
    }
    }
?>

<!DOCTYPE html>
<html>
<head>
	<style>
	.box{
		margin-bottom: 50px;
		padding: 0px;
		border: none;
		background-color: white;
		color: #0082e6;
		width: 80%;
		font-size: 20px;

	}
	body{
		margin: 0px;
	}
		
		input[type=text],input[type=number]
		{
			padding: 5px;
			border-radius: 5px;
			margin: 5px;
			width: 50%;
			font-size: 20px;
			border: 1px solid;
			border-color: #BDC4C7;
		}
		input[type=submit],button
		{
			width: 51%;
			background-color: #0082e6;
			border: none;
			color: white;
			padding: 10px;
			font-size: 20px;
			margin: 8px;
			border-radius: 5px;
			cursor:pointer;
		}

		input[type=submit]:hover,button:hover
		{
		    cursor:pointer;
			background: #1b9bff;
			transition: .2s;

			
		}
		body
		{
			margin: 0;

		}
		h2{
			color: #0082e6;
			text-align: center;
			padding-top: 30px;
			padding-bottom: 30px;
			font-size: 25px;
		}

</style>
</head>
<body>

	<center>
		<h2>Add Sell</h2>
		<div class="box">					  
			<form action='AddSell.php' method='POST'>
				<input type='text' name='Cname'  placeholder='Customer Name' required>
				<br>
				<input type='text' name='Cmobile'  placeholder='Customer Number' required >
				<br>
				<input type='text' name='ProductName'  placeholder='Product Name'  required>
				<br>
				<input type="number" placeholder="Quantity" name="Quantity" required>
				<br>
				<input type="number" placeholder="Price Per Unit" name="PPU" required>
				<br>
				<input type="number" placeholder="Total" name="Total" required>
				<br>
				<input type='submit' name='Add' value='Add'>
		    </form>
		</div>
	</center>

</body>
</html>