<?php
include_once('Includes/Connection.php');
if(isset($_POST['submit']))
{
	$name1 = mysqli_real_escape_string($con, $_POST['fname']);
	$name2 = mysqli_real_escape_string($con, $_POST['lname']);
	$name = $name1 ." ". $name2;
	$mail = mysqli_real_escape_string($con, $_POST['umail']);
	$addr = mysqli_real_escape_string($con, $_POST['uaddr']);
	$dob = mysqli_real_escape_string($con, $_POST['udob']);
	$mob = mysqli_real_escape_string($con, $_POST['umob']);
	$pas1 = mysqli_real_escape_string($con, $_POST['upass1']);
	$pas2 = mysqli_real_escape_string($con, $_POST['upass2']);

	if($pas1 == $pas2)
	{
		$pas1 = md5($pas2);
		$query = "INSERT INTO Users (Name, Email, Address, DateOfBirth, Mobile, Password) values ('".$name."','".$mail."','".$addr."','".$dob."','".$mob."','".$pas1."');";
		if(mysqli_query($con, $query))
		{
			$fulldate = getdate(date("U"));
	    	$sql = "INSERT INTO activity(activity, act_date, effected_table) VALUES ('New Registration done into System by ".$name."','$fulldate[mday]/$fulldate[month]/$fulldate[year]','Users');";
	    	if(mysqli_query($con, $sql)) {			
				echo ("<script> alert('Successfully Registered.'); </script>");
				echo ("<script> location.href = 'Login.php'; </script>");
			}
			else {
				echo ("<script> alert('Admin will not notify.'); </script>");
			}
		}
		else
		{
			echo ("<script> alert('Could not register into system.'); </script>");
			//header("location: Index.php");
			echo ("<script> location.href = 'Signup.php'; </script>");
		}
	}
	else
	{
		echo("<script> alert('Password Don't Match.!); </script>");
		echo ("<script> location.href = 'Signup.php'; </script>");
	}
}
else
{
	echo "Unauthorized Access. Error Code : " . mysqli_connect_errno();
	header("Refresh:1, url=Index.php");
}
?>