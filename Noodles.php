<html>
	<head>
		<link rel="icon" type="image/x-ico" href="FaFa/world.png" />
		<title>Products of Noodles</title>
	</head>
	<body>
		<?php include_once('HeaderNavigation.php'); ?>
		<h2 class="text-center text-muted">Products In <?php $path_name = $_SERVER['PHP_SELF'];
			$path_name = trim($path_name, "/Grocers.com/");
			$pathname = trim($path_name, ".php");
			echo $pathname; ?></h2><hr />
		<div class="container">
			<div class="row">
				<?php
					session_start();
					include_once('Includes/Connection.php');
					include_once('Includes/Config.php');
					$current_url = urlencode($url="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
					$qry = "SELECT category_id FROM category WHERE category_name = '".$pathname."'";
					$result = mysqli_query($con, $qry);
					$row = mysqli_fetch_array($result);
					$qry1 = "SELECT product_name, brand_name, quantity, price, product_id FROM product WHERE category_id = '".$row[0]."'";
					$result1 = mysqli_query($con, $qry1);
					
					while($row1 = mysqli_fetch_array($result1)) { ?>
						<div class="col-md-4 text-center text-muted text-warning">
							<?php echo "<img src='uploads/p".$row1[4].".jpg' class='img-responsive img-thumbnail' style='height: 300px; width: 360px;'/>"; ?>
							<form method="post" action="cartUpdate.php">
								<table class="table table-striped table-hover">
									<tr><td>Product Name <td>: <?php echo $row1[0]; ?></tr>
									<tr><td>Brand Name <td>: <?php echo $row1[1]; ?></tr>
									<tr><td>Quantity <td>: <?php echo $row1[2]; ?></tr>
									<tr><td>Price <td>: <?php echo $row1[3]." "; ?><i class="fa fa-inr"></i></tr>
									<tr><td>Packets</td><td>: <input type="number" name="product_qty" min="0" class="text-center" style="border-radius:3px; border: 1px solid #ddd; width: 50px; margin: 0px auto;"></td></tr>
									<tr><td colspan="2">
										<input type="hidden" name="product_id" value="<?php echo $row1[4]; ?>"/>
										<input type="hidden" name="type" value="add" />
										<input type="hidden" name="return_url" value="<?php echo $current_url; ?>" />
										<input type="submit" value="Add To Cart" class="btn btn-success"></tr>
								</table>
							</form>
						</div>
				<?php } ?>
			</div>
			<?php include_once('CartSection.php'); ?>
		</div>
	</body>
</html>