<?php

	$dbhost = "boythy6zl5omw0gorikw-mysql.services.clever-cloud.com";
	$dbuser = "uxoxsgiwufrcpw98";
	$dbpass = "8hdXclmnm5wmynCPaDJH";
	$dbname = "boythy6zl5omw0gorikw";


	$conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname);


	if ($conn->connect_error) {
  	die("Connection failed: " . $conn->connect_error);
		}


	?>