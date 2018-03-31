<html>
<head>
	<link rel="icon" href="../FaFa/fa-Security-Password-2-icon.png" />
	<title>Admin Log In Page</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script> 
	<style type="text/css">
		@import url('../Style.css');
		@import url('../../DemoPhp/Style/font-awesome-4.6.3/css/font-awesome.min.css');
	</style>
	<style type="text/css">
		body {
			font-family: Harrington;
			background-color: #fff;
		}
		.form-control {
			width: 100%;
		}
	    .bs-example {
	    	width: 60%;
	    	margin: 0px auto;
	    	border-radius: 10px;
	    	border: 2px solid #333;
	    	margin-top: 20px;
	    	padding: 10px 10px 10px 10px;
	    }
	    .form-horizontal .control-label{
	        padding-top: 7px;
	    }
	</style>
</head>
<body>
	<?php
		session_start();
		//echo $_SESSION['login_admin'];
		if(!isset($_SESSION['login_admin']))
		{
	?>
		<div class="wrapper" style="background-color: #333;">
		<h1>Online Grocery System</h1>
	</div>
	<h3 style="text-align: center;">
	  Administrator Log In Portal<br/>
	  <small class="text-muted">Log In with Email Address and Password</small>
	</h3>
	<div class="bs-example">
	    <form class="form-horizontal" autocomplete="off" action="ProcessLogin.php" method="post">
	        <div class="form-group">
	            <label for="inputEmail" class="control-label col-md-2">Email</label>
	            <div class="col-md-10">
	                <input type="email" class="form-control" id="inputEmail" name="ad_mail" placeholder="Email" required>
	            </div>
	        </div>
	        <div class="form-group">
	            <label for="inputPassword" class="control-label col-md-2">Password</label>
	            <div class="col-md-10">
	                <input type="password" class="form-control" id="inputPassword" name="ad_pswd" placeholder="Password" required>
	            </div>
	        </div>
	        <div class="form-group">
	            <div class="col-md-offset-2 col-md-10">
	                <input type="submit" value="Log In" name="proceed" class="btn btn-primary">
	            </div>
	        </div>
	    </form>
	</div>

	<p class="lead" style="font-size: 25px; font-weight: bold; margin: 0px auto; margin-top: 50px; width: 80%;">Administration Support</p>
	<p style="margin: 0px auto; margin-top: 10px; text-align: justify; font-size: 20px; width: 70%;">You'll assist in the smooth-running of one of our stores' busy departments. As well as dealing courteously and helpfully with customers' queries so they can enjoy a great shopping experience, you'll carry out a range of admin and clerical duties and support other areas of the store when required. With good planning and communication skills, you'll be someone who strives to exceed customer expectations and works to high standards. Retail experience would be useful, as would knowledge of cash office, personnel or ordering systems.</p>
	<div class="navbar-fixed-bottom footer" style="text-align: center; margin-top: 1.5%;">
		<mark>Copyright &copy;2017. All Rights Reserved. Grocery System.</mark>
	</div>
	<?php
		}
		else
		{
			header( "Location: Home.php");
		}
	?>
</body>
</html>