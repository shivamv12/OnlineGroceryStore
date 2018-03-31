<html>
	<head>
		<link rel="icon" type="image/x-ico" href="FaFa/world.png" />
		<title>Index Page of Grocers.com</title>
		
		<link rel="stylesheet" type="text/css" href="engine1/style.css" />
		<script type="text/javascript" src="engine1/jquery.js"></script>
		
	</head>
	<body>
		<?php include_once('HeaderNavigation.php'); ?>
		<?php include_once('Header.php'); ?>
		<hr /><div class="container-fluid">
		<?php include_once('Slider.php'); ?>
		</div>
		<div class="container"><hr />
			<div class="row">
				<div class="col-md-12 text-center">
					<h3>Ab Shopping Karo Aaram Se...</h3>
					<p>Grocers.com brings to you the comfort of shopping online from your preferred neighbourhood retailer. You can view exclusive offers and discounts on grocery items from retailers in your location and get grocery home delivered through our user-friendly platform.</p>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12 text-center" style="background-color: white; padding: 10px; margin-top: 15px; font-family: Arial; font-size: 2em;">
					WHY CHOOSE GROCERS.COM ?
				</div>
			</div>
			<div class="row">
				<div class="col-md-12 text-center">
					<img src="FaFa/Capture.png" style="height: 100px; width: 80%;" class="img-rounded" />
				</div>
			</div><hr />
			<?php include_once('TopCategory.php'); ?>
			<hr />
			<?php include_once('TopProducts.php'); ?>
			<hr />
			<div class="row">
				<h3 class="text-center">Top Brands</h3>
				<?php
				for ($i=1; $i<=4; $i++) {
				    $image = "Brands/" . $i . ".jpg";
				    echo "<div class='col-md-3 text-center' style='padding: 0px;'>";
				    echo "<img class='img-thumbnail' style='' src='".$image."'/><br/>";
				    echo "</div>";
				}
				?>
			</div><hr />
			<img style="margin-bottom: -19px!important;" class="img-responsive" src="uploads/Our Products.jpg"/>
		</div>
		<?php include_once('Footer.php'); ?>
	</body>
</html>