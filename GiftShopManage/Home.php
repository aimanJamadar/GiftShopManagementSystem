<?php
ob_start();
session_start();
include 'server.php';


if(isset($_POST['Login']))
{
    $email=$_POST['email'];
    $pass=$_POST['pass'];
    
    $qry="select * from admin where Email='".$email."'";
    $res=mysqli_query($con, $qry);
    while($row=mysqli_fetch_assoc($res))
    {
        $demail=$row['Email'];
        $dpass=$row['Password'];
    }
    
    if($email==$demail && $pass==$dpass)
    {
       $_SESSION["user"]="Admin";
       
        header("Location: Dashboard.php");
        
    }
    else
    {
          echo "<h1>Login Fail !</h1>";
    }
    
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Login GSMS</title>
	<style type="text/css">
		body {
		
			font-size: 20px;
			color: #0082e6;
		}
		form {
			border: 5px solid #f1f1f9;
			width: 50%;
			height: 100%;
			padding-bottom: 30px;

		}

		input[type=text], input[type=password]{
		  width: 60%;
		  padding: 10px;
		  margin: 0px;
		  margin-bottom: 10px;
		  font-size: 20px;
		  display: inline-block;
		  border: 1px solid #ccc;
		  box-sizing: border-box;
		}
		input[type=submit]
				{
					width: 60%;
					background-color: #0082e6;
					border: none;
					color: white;
					font-size: 20px;
					padding: 10px;
					margin: 0px;
					margin-top: 20px;
					margin-bottom: 30px;
					border-radius: 5px;
					cursor:pointer;
		}

		input[type=submit]:hover
		{
		    cursor:pointer;
			background: #1b9bff;
			transition: .2s;
		}

		.imgcontainer {
		  text-align: center;
		  margin: 24px 0 12px 0;
		}

		img.avatar {
		  width: 25%;
		  border-radius: 50%;
		}


}
	</style>
</head>
<body>
<center>	
<h2>Login </h2>
<div class="box1">
<form action="Home.php" method="post">
  <div class="imgcontainer">
    <img src="img_avatar2.png" alt="Avatar" class="avatar">
  </div>

    <label for="uname">Email Id</label><br>
    <input type="text" placeholder="Enter Email" name="email" required><br>

    <label for="psw">Password</label><br>
    <input type="password" placeholder="Enter Password" name="pass" required><br>
        
    <input type="submit" value="Login" name="Login">

</form>
</div>
</center>
</body>
</html>