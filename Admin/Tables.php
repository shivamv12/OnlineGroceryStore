<!DOCTYPE html>
<html>
<head>
	<!-- Browser Window Icon -->
	<link rel="icon" type="images/x-ico" href="../FaFa/fa-user-3.png" />
	<title>Tables</title>
	<style type="text/css">
		@import url('../../DemoPhp/Style/font-awesome-4.6.3/css/font-awesome.min.css');
		body {
			overflow-x: hidden;
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
	<?php include_once "header.php" ?>
	<?php include_once "navigation.php" ?>
		<div class="text-center col-md-10">
			<h3>Tables in Database
			  <small class="text-muted">will show require tables</small>
			</h3>
			<hr/>
		</div>
		<div class="row main">
			<div style="margin-top: 6%;"></div>
			<div class="col-md-2"></div>
			<div class="col-md-9">
				<?php
					include_once('../Includes/Connection.php');
					$sql = "desc category";
					$result = mysqli_query($con, $sql);
					if(!$result)
					{
					  die('Could not get data: ' . mysql_error());
					}
					echo "<table class='table table-striped table-bordered table-hover'><tr><th>Field<th>Type of Field<th>Key<th>Extra</tr>";					
					while($row = mysqli_fetch_array($result))
						echo "<tr><td>".$row[0]."<td>".$row[1]."<td>".$row[3]."<td>".$row[5]."</td>";

					$sql = "desc product";
					$result = mysqli_query($con, $sql);
					if(!$result)
					{
					  die('Could not get data: ' . mysql_error());
					}
					echo "<table class='table table-striped table-bordered table-hover'><tr><th>Field<th>Type of Field<th>Key<th>Extra</tr>";					
					while($row = mysqli_fetch_array($result))
						echo "<tr><td>".$row[0]."<td>".$row[1]."<td>".$row[3]."<td>".$row[5]."</td>";

					$sql = "desc feedback";
					$result = mysqli_query($con, $sql);
					if(!$result)
					{
					  die('Could not get data: ' . mysql_error());
					}
					echo "<table class='table table-striped table-bordered table-hover'><tr><th>Field<th>Type of Field<th>Key<th>Extra</tr>";					
					while($row = mysqli_fetch_array($result))
						echo "<tr><td>".$row[0]."<td>".$row[1]."<td>".$row[3]."<td>".$row[5]."</td>";					
				?>
			</div>
		</div>
	<?php } else { ?>
	<p style="text-align: center; margin-top: 100px;">
		<i style="font-size: 2em;" class="fa fa-exclamation-triangle"><font>Something Went Wrong.! Try Again.</font></i>
	</p>
	<?php header('Refresh:1, url=Index.php'); } ?>
</body>
</html>