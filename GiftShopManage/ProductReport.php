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
	<title>Gift Shop Managment System</title>
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
<?php
include 'server.php';
?>
<body>
	<h2>Gift Report</h2>
	 <center>
	<div class="box">
	<table>
			<tr>
				<th>Sr No.</th>
				<th>Product Name</th>
				<th>Type</th>
				<th>Company</th>
				<th>Units</th>
				<th>Price Per Unit</th>
				<th>Action</th>
			</tr>
		<tbody>
			<?php
            $i=1;
            $qr="select * from giftdetails";
            $res=mysqli_query($con, $qr);
            while($data=mysqli_fetch_assoc($res))
            {
             ?>
					<tr>
						 <td><?php echo $i++;?></td>
		                 <td><?php echo $data['ProductName'];?></td>
		                 <td><?php echo $data['Type'];?></td>
		                 <td><?php echo $data['Company'];?></td>
		                 <td><?php echo $data['Units'];?></td>
		                 <td><?php echo $data['PPU'];?></td>
		                 <td>
		                 	<div class="buttons">
			                  <form action='ProductReport.php' method='POST'>
			                      <input readonly type='hidden' name='Productid' value='<?php echo $data["id"];?>'>
			                      <input type='Submit' name='Delete' value='Delete'>
			                   </form>
			                </div>
		              	 </td>
		            </tr>
	       		 </div>
	       	</center>

             <?php
            }
            ?>

            <?php

if(isset($_POST['Delete']))
{
    $billid=$_POST['Productid'];
    $qr="delete from giftdetails where id=".$billid;
    $r=mysqli_query($con, $qr);
    if($r==1)
    {
        echo "<script>alert('Record Deleted !');</script>";
    }
    else{
               echo "<script>alert('Record Not Deleted !');</script>";
 
    }
}
?>
			
		</tbody>
	</table>
</body>
</html>