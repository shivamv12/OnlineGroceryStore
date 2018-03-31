<?php
 ob_start();
 //session_start();
 include_once('Includes/Connection.php');
 $table_name = "feedback";
 $mesgError = "";
 $error = false;
 
 if(isset($_POST['submit']) ) {
  $mesg = strip_tags($_POST['feed']);
  $mesg = htmlspecialchars($mesg);
  
  if(empty($mesg)) {
   $error = true;
   $mesgError = "Please Enter Something.";
  }
  
  	if (!$error) {
	    $fedback = $_POST['feed'];
		$fulldate = getdate(date("U"));
		$actual_date = '';

	    if(isset($_SESSION['user'])) {
			$sql = "SELECT Name FROM users WHERE User_Id = '".$_SESSION['user']."';";
			$result = mysqli_query($con, $sql);
			$row = mysqli_fetch_array($result);
			$username = $row[0];
	    }
		else
			$username = 'Unregistered User';
	    
	    $qry = "INSERT INTO $table_name(user_name, mesg, submitdate) VALUES ('".$username."', '".$fedback."', '$fulldate[mday]/$fulldate[month]/$fulldate[year]')";

	    if(mysqli_query($con, $qry)) {
	    	$sql = "INSERT INTO activity(activity, act_date, effected_table) VALUES ('New Feedback stored into database by ".$username."','$fulldate[mday]/$fulldate[month]/$fulldate[year]','".$table_name."');";
	    	if(mysqli_query($con, $sql))
		    	echo "<script> alert('Thanks for feedback.'); </script>";
	    }
	    else
			echo "<script> alert('Something went wrong.!'); </script>";
	    }
	}
?>
		<div class="container-fluid" style="background-color: #333; padding: 10px;">
			<div class="row">
				<div class="col-md-12 text-left" style="color: #aaa;">
					<span style="font-size: 1.2em;">More Categories </span><span style="font-size: 2em;">&raquo;</span>
					<?php
						$sql = "SELECT category_name FROM category";
						$res = mysqli_query($con, $sql);
						while($row = mysqli_fetch_array($res))
						{
						?>
						<span style="font-size: 1.1em; padding: 10px;"><?php echo "<a style='text-decoration: none; color: #aaa;' href='".$row[0].".php'>".$row[0]."</a>" ?></span>
						<?php } ?>
				</div><hr/>
				<div class="col-md-4">
					<h3 style="color: #aaa; text-transform: capitalize; font-family: Halvetica;" class="text-center">we love your feedbacks.</h3>
					<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post" class="form-horizental" style="width: 80%; margin: 0px auto;">
				        <div class="input-group">
					        <input type="text" class="form-control" placeholder="Enter your feedbacks, suggestions." name="feed" required />
					        <!-- <span class="input-group-addon"><i class="fa fa-search"></i></span> -->
					        <span class="input-group-btn"><input type="submit" class="btn btn-success" name="submit">
						</div>
						<span class="text-danger"><?php echo $mesgError; ?></span>
				    </form>
				</div>
				<div class="col-md-4">
					<h3 style="color: #aaa; text-transform: capitalize; font-family: Halvetica;" class="text-center">Get Social with us.</h3>
        			<div class="text-center center-block">
		                <a href="https://www.facebook.com/indianrailwaylovers12/" target="_blank"><i style="color: #aaa;" id="social-fb" class="fa fa-facebook-square fa-3x social"></i></a>
			            <a href="https://youtube.com/c/indianrailwaylovers/" target="_blank"><i style="color: #aaa;" id="social-tw" class="fa fa-youtube-square fa-3x social"></i></a>
			            <a href="https://www.instagram.com/ancientindiantemples/" target="_blank"><i style="color: #aaa;" id="social-gp" class="fa fa-instagram fa-3x social"></i></a>
			            <a href="https://aboutme.google.com/b/110672673861703503060/" target="_blank"><i style="color: #aaa;" id="social-em" class="fa fa-google-plus-square fa-3x social"></i></a>
					</div>
				</div>
				<div class="col-md-3">
					<div class="row text-center" style="color: #aaa; font-size: 1.3em; padding-top: 20px; font-family: Halvetica;">
						<div class="col-md-12 suport" onclick="location.href='aboutus.php';">About Us</div>
						<div class="col-md-12 suport" onclick="location.href='policy.php';">Privacy Policy</a></div>
						<div class="col-md-12 suport" onclick="location.href='t_and_c.php';">Terms &amp; Conditions</a></div>
					</div>
					<a href="#"><i class="fa fa-arrow-circle-up fa-2x pull-right" style="color: #aaa;"></i></a>
				</div>
			</div><div class="col-md-12"></div><hr/>
			<div class="row" style="color: #aaa; font-family: Halvetica;">
				<div class="col-xs-9 text-left">
					&copy; Copyright 2017. All rights reserved. Online Grocery System.
				</div>
				<div class="col-xs-3 text-right">
					<?php
						//session_start();
						if(isset($_SESSION['user'])) {
							echo "<button class='btn btn-danger' background-color: crimson;'><a href='logout.php' style='text-decoration: none; color: ghostwhite;'>Log Out</a></button>";
						}
					?>
				</div>
			</div>
		</div>
		<style type="text/css">
			.suport:hover {
				cursor: Pointer;
			}
		</style>