	<?php
		//session_start();
		//echo $_SESSION['login_admin'];
		if($_SESSION['login_admin'] != '')
		{
	?>
	<div class="navbar-fixed-bottom footer" style="text-align: center; margin-top: 1.5%;">
		<mark>Copyright &copy;2017. All Rights Reserved. Grocery System.</mark>
	</div>
	<?php } else { ?>
	<p style="text-align: center; margin-top: 100px;">
		<i style="font-size: 2em;" class="fa fa-exclamation-triangle"><font>Something Went Wrong.! Try Again.</font></i>
	</p>
	<?php header('Refresh:1, url=Index.php'); } ?>
<!--navbar-fixed-bottom -->