<!DOCTYPE html>
<html>
<head>
	<link rel="icon" href="../FaFa/fa-upload.png" />
	<title>Category Upload Form</title>
	<style type="text/css">
		@import url('NavBarStyle.css');
		@import url('FormStyle.css');
		@import url('../../DemoPhp/Style/font-awesome-4.6.3/css/font-awesome.min.css');

		.input-group {
			width: 100%!important;
		}
	</style>
</head>
<body>
	<?php
		session_start();
		//echo $_SESSION['login_admin'];
		if($_SESSION['login_admin'] != '')
		{
	?>
		<?php include_once "Header.php" ?>
		<?php include_once "navigation.php" ?>
		<div class="text-center col-md-9">
			<h3>Category Upload Form
			  <small class="text-muted">upload categories with required information</small>
			</h3>
		</div>
		<div class="container-fluid">
			<div class="row main">
				<div class="main-login main-center">
					<form class="" method="post" action="ProcessCategory.php" enctype="multipart/form-data">
						
						<!--div class="form-group">
							<label for="name" class="cols-sm-2 control-label">Category ID</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<input type="text" class="form-control" name="catid" id="cat_id" placeholder="Enter Category ID"/>
								</div>
							</div>
						</div-->

						<div class="form-group">
							<label for="name" class="cols-sm-2 control-label">Category Name</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<!--span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span-->
									<input type="text" class="form-control" name="catname" id="cat_name"  placeholder="Enter Category Name"/>
								</div>
							</div>
						</div>

						<div class="form-group">
							<label for="email" class="cols-sm-2 control-label">Image</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<input type="file" class="form-control" name="file" id="file" placeholder="Enter Brand Name"/>
								</div>
							</div>
						</div>
						<div class="form-group">
							<input type="submit" id="button" class="btn btn-primary btn-lg btn-block login-button" value="Upload Category" name="submit">
						</div>
					</form>
				</div>
			</div>
		</div>
		<?php include_once ('Footer.php'); } else { ?>
		<p style="text-align: center;">
			<i style="font-size: 2em;" class="fa fa-exclamation-triangle"><font>Something Went Wrong.! Try Again.</font></i>
		</p>
		<?php header('Refresh:1, url=Index.php'); } ?>
	</body>
</html>						