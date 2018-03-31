<?php
session_start();
include_once("Includes/config.php");
include_once("Includes/Connection.php");

if(isset($_SESSION['user']))
{
	$order_id = $_SESSION['ordr'];
?>
<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script> 
		
		<style type="text/css">
			@import url('Style.css');
			@import url('../DemoPhp/Style/font-awesome-4.6.3/css/font-awesome.min.css');
			.navbar {
				border-radius: 0px;
			}
			font {
				font-size: 2em;
				font-family: Halvatica;
				color: #aaa;
			}
			body {
				margin: 0px auto;
				padding: 0px;
				overflow-x: hidden;
				background-color: #fff;
				font-family: Halvetica; 
			}
		</style>
		<title>Thank you for visit</title>
	</head>
	<body>
	<div class="container-fluid">
		<div class="row" style="background-color: #333; color: #aaa;">
			<div class="col-xs-6">
				<h2 class="text-left" style="cursor: pointer;" onclick="location.href='Index.php';">Grocers.com</h2>
			</div>
			<div class="col-xs-6 text-right" style="margin-top: 28px;">
				<?php
					$date = date('Y/m/d, l');
					echo "<font id='date' style='color: #aaa; font-size: 1.4em;'>".$date."</font>";
				?>
			</div>
		</div>
		<div class="row" style="padding: 100px;">
			<div class="col-md-12">
				<h1 class="text-center">Thank You for Shopping with us.</h1>
				<h3 class="text-center">Please visit again, we will take care of your security and services.</h3>
			</div>
			<div class="col-md-12" style="padding-top: 50px;">
				<h4 class="text-center">Your Order ID is - <?php echo "Gro".$order_id; ?></h4>
			</div>
		</div>
<?php } else { ?>
<h3>Something Went Wrong.!</h3>
<?php header('refresh: 2, url=Login.php'); } ?>