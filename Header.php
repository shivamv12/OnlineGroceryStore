<?php
	session_start();
	include_once('Includes/Connection.php');
	if(isset($_SESSION['user'])) {
	$qry = "SELECT Name FROM users WHERE User_Id = '".$_SESSION['user']."';";
	$result = mysqli_query($con, $qry);
	$row = mysqli_fetch_array($result);
	}
?>

<div class="row">
	<div class="col-md-1"></div>
	<div class="col-md-5 text-center">
		<h4 style="color: #222;">Welcome <?php if(isset($_SESSION['user'])) { echo $row[0]; } ?>, Enjoy Shopping with us. Find a product from our range.</h4>
	</div>
	<div class="col-md-1"></div>
	<div class="col-md-5">
		<form action="http://google.com/cse" class="form-horizental" style="width: 80%; margin: 0px auto;">
	        <input type="hidden" class="form-control" name="cx" value="001784029832991463379:m-0dkufuuj0" />
	        <input type="hidden" class="form-control" name="ie" value="UTF-8" />
	        <div class="input-group">
		        <input type="search" class="form-control" placeholder="Google Custom Search" name="q" />
		        <!-- <span class="input-group-addon"><i class="fa fa-search"></i></span> -->
		        <span class="input-group-btn"><button class="btn btn-success"><span>Search</span>
			</div>
	    </form>
	</div>
	<!--div class="col-md-1"></div>
	<div class="col-md-2">
		<!--?php
			if(isset($_SESSION['user']))
				echo $row[0];
		?-->
	</div>
</div>