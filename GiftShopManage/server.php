<?php
	
	define('DBHOST', 'localhost');
	define('DBUSER', 'root');
	define('DBPASS', '');
	define('DBNAME', 'giftshopmanage');
	//$db="PHPproject";
	$con = mysqli_connect(DBHOST,DBUSER,DBPASS);
	if ( !$con ) {
		die("Connection failed : " );
	}
	else{
	 // echo "Connection Done !";
	}
	///mysql_select_db($db);
	mysqli_select_db($con,DBNAME);
	//echo "connected";
	

    ?>

