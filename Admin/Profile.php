<!DOCTYPE html>
<html>
<head>
	<!-- Browser Window Icon -->
	<link rel="icon" type="images/x-ico" href="../FaFa/fa-user-3.png" />
	<title>Administrator Home Page</title>
	<style type="text/css">
		@import url('../../DemoPhp/Style/font-awesome-4.6.3/css/font-awesome.min.css');
		body {
			overflow-x: hidden;
		}
		.input-group {
			width: 100%;
		}
	</style>
</head>
<body>
	<?php
		session_start();
		//echo $_SESSION['login_admin'];
		if($_SESSION['login_admin'] != '')
		{
			$active_admin = $_SESSION['login_admin'];
	?>
	<?php include_once "header.php" ?>
	<?php include_once "navigation.php" ?>
		<div class="text-center col-md-9">
			<h3>Profile Of Administrator
			  <!--small class="text-muted">upload categories with required information</small-->
			</h3><hr style="color: black;" size="2" />
		</div>
		<div class="row main">
			<div style="margin-top: 6%;"></div>
			<div class="col-md-2"></div>
			<div class="col-md-3 text-center">
				<?php
					include_once('../Includes/Connection.php');
					$col1 = 'admin_name';
					$col2 = 'admin_mail';
					$col3 = 'contact';
					$col4 = 'last_login_date';
					$col5 = 'avatar';
					$col6 = 'last_login_time';
					$table_name = 'admin';

					$qry = "SELECT $col1, $col2, $col3, $col4, $col5, $col6 from $table_name"; /*where $col2 = $active_admin*/
					$result = mysqli_query($con, $qry);
					while($row = mysqli_fetch_array($result))
					{
						//echo $row[0], $row[1], $row[2], $row[3], $row[4]; 
						$admin_name = $row[0];
						$email_id = $row[1];
						$contact_no = $row[2];
						$last_login_date = $row[3];
						$image_name = $row[4];
						$last_login_time = $row[5];
						//echo "<div class='wrapper' style='width: 200px;'>";
						echo "<img src='../uploads/".$row[4]."' class='img-circle' height='150px'>";
						echo "<p style='font-size: 18px; font-family: High Tower Text;'> Log In as : ".$email_id."</p><hr/>";
				?>
			</div>
			<div class="col-md-1"></div>
			<div class="col-md-5">
				<form class="" method="post" action="" enctype="multipart/form-data">
					<div class="form-group">
						<label for="name" class="cols-sm-2 control-label">Admin Name</label>
						<div class="cols-sm-10">
							<div class="input-group">
								<span class="input-group-addon"><i class="fa fa-user" aria-hidden="true"></i></span>
								<?php 
									echo "<input type='text' value='".$admin_name."' class='form-control' name='adname' id='ad_name' readonly/>";
								?>
								<span class="input-group-addon"><i class="fa fa-pencil-square-o"aria-hidden="true"></i></span>								
							</div>
						</div>
					</div>
					<div class="form-group">
						<label for="name" class="cols-sm-2 control-label">Email Address</label>
						<div class="cols-sm-10">
							<div class="input-group">
								<span class="input-group-addon"><i class="fa fa-envelope"aria-hidden="true"></i></span>
								<?php 
									echo "<input type='email' value='".$email_id."' class='form-control' name='admail' id='ad_mail' readonly/>";
								?>
								<span class="input-group-addon"><i class="fa fa-pencil-square-o"aria-hidden="true"></i></span>
							</div>
						</div>
					</div>
					<div class="form-group">
						<label for="name" class="cols-sm-2 control-label">Contact Number</label>
						<div class="cols-sm-10">
							<div class="input-group">
								<span class="input-group-addon"><i class="fa fa-tty"aria-hidden="true"></i></span>
								<?php 
									echo "<input type='number' value='".$contact_no."9' class='form-control' name='adcntct' id='ad_cntct' readonly/>";
								?>
								<span class="input-group-addon"><i class="fa fa-pencil-square-o"aria-hidden="true"></i></span>								
							</div>
						</div>
					</div>
					<div class="form-group">
						<label for="name" class="cols-sm-2 control-label">Last Active Date</label>
						<div class="cols-sm-10">
							<div class="input-group">
								<span class="input-group-addon"><i class="fa fa-calendar"aria-hidden="true"></i></span>
								<?php 
									echo "<input type='text' value='".$last_login_date."' class='form-control' name='adlod' id='ad_log' disabled/>"; ?>
								<!-- <span class="input-group-addon"><i class="fa fa-ban"aria-hidden="true"></i></span> -->
								<span class="input-group-addon"><i class="fa fa-clock-o"aria-hidden="true"></i></span>
								<?php							
									echo "<input type='text' value='".$last_login_time."' class='form-control' name='adlod' id='ad_log' disabled/>";
								?>
								<!-- <span class="input-group-addon"><i class="fa fa-ban"aria-hidden="true"></i></span> -->
							</div>			
						</div>
					</div>							
				</form>
			</div>
		</div>
	<?php  } include_once "footer.php" ?>
	<?php } else { ?>
	<p style="text-align: center; margin-top: 100px;">
		<i style="font-size: 2.3em;" class="fa fa-bug"><font>Something Went Wrong.! Try Again.</font></i>
	</p>
	<?php header('Refresh:1, url=Index.php'); } ?>
</body>
</html>