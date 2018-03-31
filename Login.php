<?php
 ob_start();
 session_start();
 include_once('Includes/Connection.php');
 $table_name = "users";
 $emailError = "";
 $passError = "";
 // it will never let you open index(login) page if session is set
 if (isset($_SESSION['user'])) {
 	echo "You have already Logged into system.!";
	header("refresh:3, url = index.php");
  exit;
 }
 else {
 $error = false;
 
 if( isset($_POST['submit']) ) { 
  
  // prevent sql injections/ clear user invalid inputs
  $email = trim($_POST['UserMail']);
  $email = strip_tags($email);
  $email = htmlspecialchars($email);
  
  $pass = trim($_POST['UserPswd']);
  $pass = strip_tags($pass);
  $pass = htmlspecialchars($pass);
  // prevent sql injections / clear user invalid inputs
  
  
  if(empty($email)){
   $error = true;
   $emailError = "Please enter your email address.";
  } else if ( !filter_var($email,FILTER_VALIDATE_EMAIL) ) {
   $error = true;
   $emailError = "Please enter valid email address.";
  }
  
  if(empty($pass)){
   $error = true;
   $passError = "Please enter your password.";
  }
  
  // if there's no error, continue to login
  if (!$error) {
   
   $password = md5($pass); // password hashing using SHA256
   $qry = "SELECT User_Id, Name, Password FROM $table_name WHERE Email='$email'";
   $result = mysqli_query($con, $qry);
   $row = mysqli_fetch_array($result);
   $count = mysqli_num_rows($result); // if uname/pass correct it returns must be 1 row
   
   if( $count == 1 && $row[2]==$password ) {
    $_SESSION['user'] = $row[0];
    header("Location: index.php");
   } else {
    $errMSG = "Incorrect Entries, Try again..!";
   }
    
  }
  
 } }
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
					<form class="" method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
		            	<?php if ( isset($errMSG) ) { ?>
					    <div class="form-group">
					        <div class="alert alert-danger">
					    		<span class="glyphicon glyphicon-info-sign"></span> <?php echo $errMSG; ?>
					        </div>
					    </div> <?php } ?>
						<div class="form-group">
							<label for="user_mail" class="cols-sm-2 control-label">User Email</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-user" style="font-size: 16px;" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="UserMail" id="user_mail"  placeholder="Enter Registered Email ID"/>
								</div>
								<span class="text-danger"><?php echo $emailError; ?></span>
							</div>
						</div>

						<div class="form-group">
							<label for="" class="cols-sm-2 control-label">Password</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-lock" style="font-size: 18px;" aria-hidden="true"></i></span>
									<input type="password" class="form-control" name="UserPswd" id="userpswd" placeholder="Enter Password"/>
								</div>
								<span class="text-danger"><?php echo $passError; ?></span>
							</div>
						</div>
						<div class="form-group">
							<input type="submit" id="button" class="btn btn-primary btn-lg btn-block login-button" value="Log In" name="submit">
						</div>
					</form>
					Don't have an account? <a class="btn-link" href="Signup.php"> Sign up</a>
				</div>
				<div class="col-md-3"></div>
			</div>
		</div>
</body>
</html>
<?php ob_end_flush(); ?>