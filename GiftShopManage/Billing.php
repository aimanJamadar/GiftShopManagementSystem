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
	<style type="text/css">
		body
		{
			margin: 0;
			text-align: left;
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
		.box{
		margin-bottom: 30px;
		padding: 20px;
		border: 5px solid #B4B4B9;
		background-color: white;
		color: black;
		width: 25%;
		height: 300px;
		font-size: 20px;

	}
	form{
		text-align: left;
	}
	select{
			padding: 5px;
			border-radius: 5px;
			margin: 5px;
			width: 50%;
			font-size: 20px;
			border: 1px solid;
			border-color: #BDC4C7;
			text-align: left;
	}
	.abc{
		padding: 10px;
		text-align: left;
		font-size: 25px;
	}

	
	</style>
</head>

<body>
	
	 <center>
	 	<h2>Bill Generator</h2>
	<div class="box">
	
			<form action='Billing.php' method='POST'>
			<select name="Pname">
				<?php
				$qr="select * from customerdetails";
				$res=mysqli_query($con, $qr);
				while ($data=mysqli_fetch_assoc($res)) {
				?>
				<option value="<?php echo $data['Cname']; ?>">
				  <?php echo $data['Cname']."(".$data['Cmobile'].")"; ?>
				    </option>
				<?php
				}?>
			</select> 
			<div class="paybtn"><input style="width: 50%;" type='submit' name='Pay' value='Generate Bill'></div>
		</form>	
			

			<?php
           
            if(isset($_POST['Pay'])){
            	$Cname=$_POST['Pname'];
            $qr="select * from customerdetails where Cname= '".$Cname."' ;";
            $res=mysqli_query($con, $qr);
            while($data=mysqli_fetch_assoc($res))
            {
             ?>
					
					<div class="abc">
						  Customer Name :<?php echo $data['Cname'];?><br>
						  Customer Mobile:<?php echo $data['Cmobile'];?><br>
		                Product Name:<?php echo $data['ProductName'];?><br>
		                 Quentity:<?php echo $data['Quantity'];?><br>
		                 Price Per Unit:<?php echo $data['PPU'];?><br>
		                  Total Amount:<?php echo $data['Total'];?><br>
		                 
		                  </div>
		                  
		            
	       		 </div>

	       	</center>


             <?php
            }
        }
            ?>	
        </body>
</html>
