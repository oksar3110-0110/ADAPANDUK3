<?php
	define('DBHOST', 'localhost');
	define('DBUSER', 'root');
	define('DBPASS', '');
	define('DBNAME', 'adapandu');

	
	$dbconnect = new mysqli(DBHOST, DBUSER, DBPASS, DBNAME);
	
	if($dbconnect->connect_error) {
		die("Connection Failed : " . $dbconnect->connect_error);
	}