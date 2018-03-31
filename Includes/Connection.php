<?php

	//define('username', 'root');
	//define('password', 'password');
	//define('host', 'localhost');
	//define('db_name', 'grocery');

	error_reporting(E_ERROR | E_PARSE);
	error_reporting(E_ALL ^ E_WARNING);
	error_reporting(~E_DEPRECATED & ~E_NOTICE);

	$username = 'root';
	$password = 'password';
	$host = 'localhost';
	$db_name = 'grocery';

	$con = mysqli_connect($host, $username, $password);
	if(!$con)
		die("Connection Not Established .!".mysql_error());
	mysqli_select_db($con, $db_name) or die('Database Error.!');
?>