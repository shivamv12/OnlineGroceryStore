<!DOCTYPE html>
<html>
<head>
	<link rel="icon" href="../FaFa/fa-upload.png" />
	<title>Product Upload Form</title>
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
			<h3>Product Upload Form
			  <small class="text-muted">upload products with required information</small>
			</h3>
		</div>
		<div class="container-fluid">
			<div class="row main">
				<div class="main-login main-center">
					<form class="" enctype="multipart/form-data" method="post" action="ProcessProduct.php">
						
						<div class="form-group">
							<label for="name" class="cols-sm-2 control-label">Category Name</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<!--span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="pro_name" id="proname"  placeholder="Enter Product Name"/-->
									<select name="catName" class="form-control"> 
								       <option value="select"> --- Select Category Name --- </option> 
									     <?php
									     	include_once ('../Includes/Connection.php');
									     	$table_name = 'category';
									     	$colmn_name = 'category_name';
									     	$colmn_name1 = 'category_id';

									     	$sql = "SELECT $colmn_name, $colmn_name1 FROM $table_name";
									     	$result = mysqli_query($con, $sql);
									     	while ($row = mysqli_fetch_array($result)) {
									     		echo "<option value=".$row[1].">".$row[0]."</option>";
									     	}
									     ?>
									</select>
								</div>
							</div>
						</div>

						<div class="form-group">
							<label for="name" class="cols-sm-2 control-label">Product Name</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<input type="text" class="form-control" name="pro_name" id="proname"  placeholder="Enter Product Name"/>
								</div>
							</div>
						</div>

						<div class="form-group">
							<label for="email" class="cols-sm-2 control-label">Brand Name</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<input type="text" class="form-control" name="brnd_name" id="brndname"  placeholder="Enter Brand Name"/>
								</div>
							</div>
						</div>

						<div class="form-group">
							<label for="username" class="cols-sm-2 control-label">Quantity</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<input type="text" class="form-control" name="quntity" id="qnt"  placeholder="Enter Quantity"/>
								</div>
							</div>
						</div>

						<div class="form-group">
							<label for="confirm" class="cols-sm-2 control-label">Product Price</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<input type="number" class="form-control" name="price" id="price1"  placeholder="Enter Product Price"/>
								</div>
							</div>
						</div>

						<div class="form-group">
							<label for="password" class="cols-sm-2 control-label">Product Image</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<input type="file" class="form-control" name="file" id="fileupload"  placeholder="Upload Product Image"/>
								</div>
							</div>
						</div>

						<div class="form-group ">
							<input type="submit" id="button" name="submit" class="btn btn-primary btn-lg btn-block login-button" value="Upload Product">
						</div>
						
					</form>
				</div>
			</div>
		</div>
		<!--?php include_once ('Footer.php'); ?-->
		<?php } else { ?>
		<p style="text-align: center; margin-top: 100px;">
			<i style="font-size: 2em;" class="fa fa-exclamation-triangle"><font>Something Went Wrong.! Try Again.</font></i>
		</p>
		<?php header('Refresh:1, url=Index.php'); } ?>
	</body>
</html>