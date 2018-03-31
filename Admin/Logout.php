<?php
    session_start();
    if($_SESSION['login_admin'] != '')
    {
	session_destroy();
	echo "Logged Out Successfully.!";
	header ( "refresh:1; url=Index.php" );
	}
	else
	{
		echo "Unauthorized Access.!";
		header ( "refresh:1; url=Index.php" );
	}
?>