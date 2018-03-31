	<?php
		//session_start();
		//echo $_SESSION['login_admin'];
		if($_SESSION['login_admin'] != '')
		{
	?>
<!-- Navigation Bar -->
	<nav class="navbar navbar-inverse sidebar" role="navigation" style="margin-top: -20px; height: auto;">
		<div class="container-fluid">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-sidebar-navbar-collapse-1">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
			</div>
			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse" id="bs-sidebar-navbar-collapse-1">
				<ul class="nav navbar-nav">
					<li class=""><a href="Home.php">Home<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-home"></span></a></li>
					<li ><a href="Profile.php">Profile<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-user"></span></a></li>
					<li class="dropdown">
						<a class="dropdown-toggle" data-toggle="dropdown">Actions <span class="caret"></span><span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-cog"></span></a>
						<ul class="dropdown-menu forAnimate" role="menu">
							<li><a href="AddCategory.php">Add Category</a></li>
							<li><a href="AddProduct.php">Add Products</a></li>
						</ul>
					</li>
					<li class="dropdown">
						<a class="dropdown-toggle" data-toggle="dropdown">Display <span class="caret"></span><span style="font-size:16px;" class="pull-right hidden-xs showopacity fa fa-laptop"></span></a>
						<ul class="dropdown-menu forAnimate" role="menu">					
							<li><a href="Products.php">Show Product List</a></li>
							<li><a href="Categories.php">Show Category List</a></li>
							<li class="divider"></li>
							<li><a href="Users.php">Show Users Database</a></li>
							<!--li class="divider"></li-->
						</ul>
					</li>
					<li ><a href="feedbacks.php">Messages<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-envelope"></span></a></li>
					<li ><a href="Tables.php">Tables<span style="font-size:16px;" class="pull-right hidden-xs showopacity fa fa-table"></span></a></li>
					<li ><a href="Orders.php">Placed Orders<span style="font-size:16px;" class="pull-right hidden-xs showopacity fa fa-shopping-cart"></span></a></li>
				</ul>
			</div>
		</div>
	</nav>
	<?php } else { ?>
		<p style="text-align: center; margin-top: 100px;">
			<i style="font-size: 2em;" class="fa fa-exclamation-triangle"><font>Something Went Wrong.! Try Again.</font></i>
		</p>
	<?php header('Refresh:1, url=Index.php'); } ?>