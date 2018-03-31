<!DOCTYPE html>
<html>
<head>
	<!-- Browser Window Icon -->
	<link rel="icon" type="images/x-ico" href="../FaFa/fa-user-3.png" />
	<title>Administrator Home Page</title>
	<style type="text/css">
		@import url('../../DemoPhp/Style/font-awesome-4.6.3/css/font-awesome.min.css');
	</style>
</head>
<body>
	<?php
		session_start();
		//echo $_SESSION['login_admin'];
		if($_SESSION['login_admin'] != '')
		{
	?>
	<?php include_once "header.php" ?>
	<?php include_once "navigation.php" ?>
	<div class="text-center col-md-10">
		<h3>Recent Activity in System.
		  <small class="text-muted"></small>
		</h3>
		<hr/>
	</div>
			<div class="row main">
			<div style="margin-top: 6%;"></div>
			<div class="col-md-2"></div>
			<div class="col-md-9">
				<?php
					include_once('../Includes/Connection.php');
					$sql = "SELECT * FROM activity ORDER BY activity_id DESC LIMIT 10";
					$result = mysqli_query($con, $sql);
					$count = mysqli_num_rows($result);
					if(!$result)
					{
					  die('Could not get data: ' . mysql_error());
					}
					
					if($count == 0)
						echo "<h4 class='text-warning'>No Recent Activity</h4>";
					else {
						echo "<table class='table table-striped table-bordered table-hover'><tr><th>Recent Activity<th>Activity Date<th>View Activity</tr>";
						while($row = mysqli_fetch_array($result))
							echo "<tr><td>".$row[1]."<td>".$row[2]."</td><td class='text-center'><a style='color: #333;' href='".$row[3].".php'><i class='fa fa-eye'></i></a></td>";
					}
				?>
			</div>
		</div>
	<?php include_once "footer.php" ?>
	<?php } else { ?>
	<p style="text-align: center; margin-top: 100px;">
		<i style="font-size: 2em;" class="fa fa-exclamation-triangle"><font>Something Went Wrong.! Try Again.</font></i>
	</p>
	<?php header('Refresh:1, url=Index.php'); } ?>
</body>
</html>