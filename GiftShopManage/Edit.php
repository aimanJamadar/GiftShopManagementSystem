<?php
include 'header.php';
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
	<title>Edit Product</title>
	<style type="text/css">
	.box table {
				border-collapse: collapse;
				width: 80%;
				}

	.box th, td {
				text-align: left;
				padding: 10px;
				}

	.box tr:nth-child(even){background-color: #f2f2f2}
    .box th {
			  background-color: #0082e6;
			  color: white;
			}
				
		body
		{
			margin: 0;

		}
		h2{
			color: #0082e6;
			text-align: center;
			font-size: 25px;
			padding-top: 20px;
			padding-bottom: 7px;
		}


		input[type=submit]
		{
			width: 51%;
			background-color: #0082e6;
			border: none;
			color: white;
			font-size: 20px;
			padding: 5px;
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
		.box1{
		margin-bottom: 30px;
		padding: 0px;
		border: none;
		background-color: white;
		color: #0082e6;
		width: 80%;
		font-size: 20px;

	}
	select{
			padding: 5px;
			border-radius: 5px;
			margin: 5px;
			width: 50%;
			font-size: 15px;
			border: 1px solid;
			border-color: #BDC4C7;
	}
	input[type=text],input[type=number]
		{
			padding: 5px;
			border-radius: 5px;
			margin: 5px;
			font-size: 15px;
			width: 50%;
			border: 1px solid;
			border-color: #BDC4C7;
		}
	</style>
</head>
<?php
include 'server.php';
?>
<body>

		<h2>Select Product to Edit</h2>
		<center><div class="box1">
		<form action='Edit.php' method='POST'>
			<select name="Pname">
				<?php
				$qr="select * from giftdetails";
				$res=mysqli_query($con, $qr);
				while ($data=mysqli_fetch_assoc($res)) {
				?>
				<option value="<?php echo $data['ProductName']; ?>">
				  <?php echo $data['ProductName']."(".$data['Type'].")"; ?>
				    </option>
				<?php
				}?>
			</select><br>
    	<input style="width: 50%;" type='submit' name='Edit' value='Edit'>
		</form>
	</div></center>
		<?php
			if(isset($_POST['Edit']))
	  		 {
		       $ProductName=$_POST['Pname'];
		       $qr="select * from giftdetails where ProductName='".$ProductName."'";
		       $res=mysqli_query($con, $qr);
	      	 while($data=mysqli_fetch_assoc($res))
	       	{
	           $dProductName=$data['ProductName'];
	           $dType=$data['Type'];
	           $dCompany=$data['Company'];
	           $dUnits=$data['Units'];
	           $dPPU=$data['PPU'];
	       }
		?>
			<h2>Update Product</h2>
			<center><div class="box1">
			<form action='Edit.php' method='POST'>
		<input type='text' value='<?php echo $dProductName;?>' name='ProductName'  placeholder='Product Name'>
	<br>
<input type='text' name='Type' value='<?php echo $dType;?>'  placeholder='Type'>
<br>
<input type='text' name='Company' value='<?php echo $dCompany;?>'  placeholder='Company'>
<br>
<input placeholder="Units" name="Units" value="<?php echo $dUnits;?>" type='number'>
<br>
<input type="text" placeholder="PPU" name="PPU" value='<?php echo $dPPU;?>'>
<br>

		<input style="background-color: #0082e6;" type='submit' name='Update' value='Update'>
		</form>
		</div>
</center>
<?php
}
?>
<?php
			if(isset($_POST['Update']))
	   {
	       $ProductName=$_POST['ProductName'];
	       $Type=$_POST['Type'];
	       $Company=$_POST['Company'];
	       $Units=$_POST['Units'];
	       $PPU=$_POST['PPU'];

	       $up="update giftdetails set ProductName='".$ProductName."', Type='".$Type."', Company='".$Company."', Units='".$Units."', PPU='".$PPU."' where ProductName='".$ProductName."'";
	    $i=mysqli_query($con, $up);
	    if($i==1)
	    {
	        echo "<script> alert('Product Record Updated !');</script>";
	    }
	    else{
	               echo "<script> alert('Product Record Update Fail !');</script>";
	 
	    }
	   }
		?>

</body>
</html>
