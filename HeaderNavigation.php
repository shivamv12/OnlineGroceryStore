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
			}
		</style>
</head>

		<nav class="navbar navbar-inverse sidebar" role="navigation">
			<div class="container">
				<div class="row">
					<div class="col-xs-2">
						<font>Grocers.com</font>
					</div>
					<div class="col-xs-2"></div>
					<!--div class="col-md-1"-->
					<div class="col-xs-8">
					<!--/div-->
					
						<!-- Brand and toggle get grouped for better mobile display -->
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-sidebar-navbar-collapse-1">
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						</div>
						<!-- Collect the nav links, forms, and other content for toggling -->
						<div class="collapse navbar-collapse" id="bs-sidebar-navbar-collapse-1">
							<ul class="nav navbar-nav">
								<li onclick="window.open('FinalOrder.php');"><i class="glyphicon glyphicon-shopping-cart" style="color: #aaa; font-size: 2em; margin-top: 10px;"></i></a></li>
								<li ><a href="Index.php"> Home<span style="padding-left: 5px; font-size:20px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-home"></span></a></li>
								<?php
								//session_start();
								if(!isset($_SESSION['user'])) {
								?>
								<li ><a href='LogIn.php'>Log In / Sign Up<span style='padding-left: 5px; font-size:20px;' class='pull-right hidden-xs showopacity glyphicon glyphicon-log-in'></span></a></li>	
								<?php } else { ?>
								<li ><a href='Logout.php'>Log Out<span style='padding-left: 5px; font-size:20px;' class='pull-right hidden-xs showopacity glyphicon glyphicon-log-out'></span></a></li>
								<?php } ?>
								<li ><a href="">Call Us 0522-4950739<span style="padding-left: 5px; font-size:20px;" class="pull-right hidden-xs showopacity fa fa-tty"></span></a></li>
								<li ><a href="https://www.google.co.in/maps/place/Chowk+Chauraha/@26.8657475,80.9068957,17z/data=!3m1!4b1!4m5!3m4!1s0x399bfde58293acc5:0x3b98fc3910b19823!8m2!3d26.8657475!4d80.9090844" target="_blank">Chowk Lucknow, 226003<span style="font-size:20px;" class="pull-right hidden-xs showopacity fa fa-map-marker"></span></a></li>
							</ul>
						</div>
					</div>
						<!--?php
							$date = date('Y/m/d, l');
							echo "<font id='date' style='color: #aaa; font-size: 1.4em;'>".$date."</font>";
						?-->
				</div>
			</div>
		</nav>