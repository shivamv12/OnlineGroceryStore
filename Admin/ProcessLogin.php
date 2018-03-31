<?php
	include_once('../Includes/Connection.php');
	
	$error = false;
	$table_name = 'admin';
	//$column1 = 'admin_mail';
	//$column2 = 'admin_pswd';
	
	if(isset($_POST['proceed']))
	{
		session_start();

		// Clean Inputs //

		$admin_id = trim($_POST['ad_mail']);
		$admin_id = stripcslashes($admin_id);
		$admin_id = htmlspecialchars($admin_id);
		$admin_id = mysqli_real_escape_string($con, $admin_id);

		$admin_ps = trim($_POST['ad_pswd']);
		$admin_ps = stripcslashes($admin_ps);
		$admin_ps = htmlspecialchars($admin_ps);
		$admin_ps = mysqli_real_escape_string($con, $admin_ps);

		// Encrypt Password //

		$admin_ps = md5($admin_ps);

		$sql = "SELECT * FROM $table_name WHERE admin_mail = '$admin_id' and admin_pswd = '$admin_ps';";
		$result = mysqli_query($con, $sql);
		$row = mysqli_fetch_array($result);
		if($row['admin_mail'] == $admin_id && $row['admin_pswd'] == $admin_ps)
		{
			$_SESSION['login_admin'] = $admin_id;
			//$date = date('Y.m.d');
			$fulldate = getdate(date("U"));		// function to fetch time attributes.
			//echo "$fulldate[weekday]";

			$qry = "UPDATE admin SET last_login_date = '$fulldate[mday]/$fulldate[month]/$fulldate[year]'";
			$qry1 = "UPDATE admin SET last_login_time = '$fulldate[hours]:$fulldate[minutes]'";
			if(mysqli_query($con, $qry) && mysqli_query($con, $qry1))
				header('Location: Home.php');
			else
				echo "<script> alert('Time Not Inserted.!'); </script>";
				echo "<script> location.href='Home.php'; </script>";
		}
		else
		{
			echo "<script> alert('Unauthenticated Access.!	'); </script>";
			echo "<script> location.href='Index.php'; </script>";
		}
	}
?>