<?php
	session_start();
	if (isset($_SESSION['user'])) {
		echo "You have already Logged into system, Logout first to register.!";
		echo "<a href='logout.php' class='link'>Log Out Here.</a>";
  		header('Refresh:5, url = index.php');
  		exit;
 	} else {
?>
<!DOCTYPE html>
<html>
<head>
		<title>Log In to Grocers.com</title>
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
			.input-group {
				width: 100%!important;
			}
			body {
				overflow-x: hidden;
			}
		</style>
</head>
<body>
	<?php
	   include_once('HeaderNavigation.php');
	   // include_once('Header.php');
	  ?>
		<div class="container">
			<div class="row main">
				<div class="col-md-3"></div>
				<div class="main-login main-center col-md-6" style="margin: auto!important;">
					<form action="StoreData.php" method="post">
						<div class="form-group">
							<label for="f_name" class="cols-sm-2 control-label">First Name</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-user" style="font-size: 16px;" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="fname" id="f_name" placeholder="Enter First Name" required />
								</div>
								<!-- <span class="text-danger"><?php echo $emailError; ?></span> -->
							</div>
						</div>
						<div class="form-group">
							<label for="l_name" class="cols-sm-2 control-label">Last Name</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-user" style="font-size: 16px;" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="lname" id="l_name" placeholder="Enter Last Name" required />
								</div>
							</div>
						</div>
						<div class="form-group">
							<label for="u_mail" class="cols-sm-2 control-label">Email ID</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-envelope" style="font-size: 16px;" aria-hidden="true"></i></span>
									<input type="email" class="form-control" name="umail" id="u_mail" placeholder="Enter Email ID" required />
								</div>
							</div>
						</div>
						<div class="form-group">
							<label for="res_add" class="cols-sm-2 control-label">Residential Address</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-building" style="font-size: 16px;" aria-hidden="true"></i></span>
									<textarea class="form-control" rows="3" maxlength="300" placeholder="Enter Residential Address" name="uaddr" id="res_add" required style="resize: none;"></textarea>
								</div>
							</div>
						</div>
						<div class="form-group">
							<label for="u_dob" class="cols-sm-2 control-label">Date Of Birth</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-calendar" style="font-size: 16px;" aria-hidden="true"></i></span>
									<input type="date" class="form-control" name="udob" id="u_dob" placeholder="Enter Email ID" required />
								</div>
							</div>
						</div>					
						<div class="form-group">
							<label for="u_mob" class="cols-sm-2 control-label">Contact Number</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-tty" style="font-size: 16px;" aria-hidden="true"></i></span>
									<input type="number" class="form-control" name="umob" id="u_mob" placeholder="Enter Contact Number" required />
								</div>
							</div>
						</div>
						<div class="form-group">
							<label for="u_pas1" class="cols-sm-2 control-label">Enter Password</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-user-secret" style="font-size: 16px;" aria-hidden="true"></i></span>
									<input type="password" class="form-control" name="upass1" id="u_pas1" placeholder="Enter Password" required />
								</div>
							</div>
						</div>
						<div class="form-group">
							<label for="u_pas2" class="cols-sm-2 control-label">Re-Enter Password</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-user-secret" style="font-size: 16px;" aria-hidden="true"></i></span>
									<input type="password" class="form-control" name="upass2" id="u_pas2" placeholder="Re-Enter Password" required />
								</div>
							</div>
						</div>
						<div class="form-group">
							<input type="submit" id="button" class="btn btn-primary btn-lg btn-block login-button" value="Register" name="submit">
						</div>
						<!--input type="text" placeholder="enter first name" name="fname" required><br/>
						<input type="text" placeholder="enter last name" name="lname" required><br/>
						<input type="email" placeholder="enter email id" name="umail" required><br/>
						
						<input type="date" placeholder="enter date of birth" name="udob" required><br/>
						<input type="number" placeholder="enter mobile number" name="umob" required><br/>
						<input type="password" placeholder="enter password" name="upass1" required><br/>
						<input type="password" placeholder="retype password" name="upass2" required><br/>
						<input type="submit" name="submit"-->
					</form>
					Already have an account? <a class="btn-link" href="Login.php"> Log In</a>
				</div>
				<div class="col-md-3"></div>
			</div>
		</div><hr/>
		<div class="container-fluid" style="background-color: #333; padding: 10px;">
			<div class="row" style="color: #aaa; font-family: Halvetica;">
				<div class="col-md-12 text-center">
					&copy; Copyright 2017. All rights reserved. Online Grocery System. | Design by - Grocers.com
				</div>
			</div>
		</div>
	</body>
</html>
<?php } ?>