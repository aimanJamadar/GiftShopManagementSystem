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
	<title>Sell Report</title>
	<style type="text/css">
	.box table {
				border-collapse: collapse;
				width: 80%;
				font-size: 20px;
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
		h1{
			color: white;
			text-align: left;
		}
		body
		{
			margin: 0;

		}
		h2{
			color: #0082e6;
			text-align: center;
			padding-top: 30px;
			font-size: 25px;
			padding-bottom: 30px;
		}


		input[type=submit],button
		{
			width: 50%;
			background-color: #0082e6;
			border: none;
			color: white;
			padding: 5px;
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

	</style>
</head>
<body>
<body>
	
	 <center>
	 	<h2>Sell Report</h2>
	<div class="box">
	<table>
			<tr>
				<th>Sr No.</th>
				<th>Customer Name</th>
				<th>Customer Number</th>
				<th>Product Name</th>
				<th>Quantity</th>
				<th>Price Per Unit</th>
				<th>Total</th>
			</tr>
		<tbody>
			<?php
            $i=1;
            $qr="select * from customerdetails";
            $res=mysqli_query($con, $qr);
            while($data=mysqli_fetch_assoc($res))
            {
             ?>
					<tr>
						 <td><?php echo $i++;?></td>
						  <td><?php echo $data['Cname'];?></td>
						   <td><?php echo $data['Cmobile'];?></td>
		                 <td><?php echo $data['ProductName'];?></td>
		                 <td><?php echo $data['Quantity'];?></td>
		                 <td><?php echo $data['PPU'];?></td>
		                  <td><?php echo $data['Total'];?></td>
		            </tr>
	       		 </div>
	       	</center>

             <?php
            }
            ?>			
		</tbody>
	</table>
</body>
</html>