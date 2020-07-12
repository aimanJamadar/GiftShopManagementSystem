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
	<title>Gift Shop Managment System</title>
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
<?php



if(isset($_POST['Add']))
{
   $ProductName=$_POST['ProductName'];
   $Type=$_POST['Type'];
   $Company=$_POST['Company'];
   $Units=$_POST['Units'];
   $PPU=$_POST['PPU'];
   $qrc="select * from giftdetails where ProductName='".$ProductName."'";
    $res=mysqli_query($con, $qrc);
    $ct=0;
    while(mysqli_fetch_assoc($res))
    {
        $ct++;
    }
    
    if($ct==0)
    {
    $x="insert into giftdetails(ProductName,Type,Company,Units,PPU) 
    values('".$ProductName."','".$Type."','".$Company."','".$Units."', '".$PPU."')";
    $i=mysqli_query($con, $x);
    if($i==1)
    {
        echo "<script>alert('Product Inserted !');</script>";
    }
    else
    {
        echo "<script>alert('Product Insert Fail !');</script>";
    }
    }
    else{
             echo "<script>alert('Product is Already Inserted !');</script>";
   
    }
}
?>

<body>
	
	<center>
		<h2>Add Product</h2>
		<div class="box">					  
			<form action='AddNew.php' method='POST'>
				<input type='text' name='ProductName'  placeholder='ProductName' required>
				<br>
				<input type='text' name='Type'  placeholder='Type' required>
				<br>
				<input type='text' name='Company'  placeholder='Company' required>
				<br>
				<input type="number" placeholder="Units" name="Units" required>
				<br>
				<input type="number" placeholder="PPU" name="PPU" required>
				<br>
				<input type='submit' name='Add' value='Add' required>
		    </form>
		</div>
	</center>
</body>
</html>