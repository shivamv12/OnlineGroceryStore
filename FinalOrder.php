<?php
session_start();
include_once("Includes/config.php");
include_once("Includes/Connection.php");

if(isset($_SESSION['user']))
{
	if(isset($_POST['Submit']))
	{
		$addr = mysqli_real_escape_string($con, $_POST['addrs']);
		$u_name = $_POST['uname'];
		$total = $_POST['amnt'];
		$qry = "INSERT INTO orders (address, username, user_id, amount) VALUES ('".$addr."','".$u_name."',".$_SESSION['user'].",".$total.");";
		$fulldate = getdate(date("U"));
	    $sql = "INSERT INTO activity(activity, act_date, effected_table) VALUES ('Some Products are purchased by ".$u_name."','$fulldate[mday]/$fulldate[month]/$fulldate[year]','orders');";
	    if(mysqli_query($con, $qry) and mysqli_query($con, $sql))
		{
			$_SESSION['ordr'] = mysqli_insert_id($con);
			header("refresh: 1, url = Thankyou.php");
		}
	}
?>
<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script> 
		
		<style type="text/css">
			@import url('Style.css');
			@import url('../DemoPhp/Style/font-awesome-4.6.3/css/font-awesome.min.css');
			.navbar {
				border-radius: 0px;
			}
			font {
				font-size: 2em;
				font-family: Halvatica;
				color: #aaa;
			}
			body {
				margin: 0px auto;
				padding: 0px;
				overflow-x: hidden;
				background-color: #fff;
				font-family: Halvetica; 
			}
		</style>
		<title>Products you select</title>
	</head>
	<body>
	<div class="container-fluid">
		<div class="row" style="background-color: #333; color: #aaa;">
			<div class="col-xs-6">
				<h2 class="text-left" style="cursor: pointer;" onclick="location.href='Index.php';">Grocers.com</h2>
			</div>
			<div class="col-xs-6 text-right" style="margin-top: 28px;">
				<?php
					$date = date('Y/m/d, l');
					echo "<font id='date' style='color: #aaa; font-size: 1.4em;'>".$date."</font>";
				?>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12 text-center">
				<h2>Your Selected Products</h2>
			</div>

			<div class="col-md-12" class="text-center text-muted">
				<form method="post" style="padding-top: 20px;" action="cartUpdate.php">
					<table class="table table-striped table-condensed text-center">
						<thead style="font-size: 1.4em;" class="text-muted">
							<tr><th class="text-center">Quantity</th><th class="text-center">Name</th><th class="text-center">Price</th><th class="text-center">Total</th><th class="text-center">Remove</th></tr>
						</thead>
			  			<tbody>
						 	<?php
							if(isset($_SESSION["cart_products"])) //check session var
						    {
								$total = 0; //set initial total value
								$b = 0; //var for zebra stripe table 
								foreach ($_SESSION["cart_products"] as $cart_itm)
						        {
									//set variables to use in content below
									$product_name = $cart_itm["product_name"];
									$product_qty = $cart_itm["product_qty"];
									$product_price = $cart_itm["product_price"];
									$product_code = $cart_itm["product_id"];
									// $product_color = $cart_itm["product_color"];
									$subtotal = ($product_price * $product_qty); //calculate Price x Qty
									
								   	//$bg_color = ($b++%2==1) ? 'odd' : 'even'; //class for zebra stripe 
								    //echo '<tr class="'.$bg_color.'">';
									echo '<td><input class="text-center" type="number" size="2" min="0" style="border: 1px solid #ddd; border-radius: 3px; width: 50px;" maxlength="2" name="product_qty['.$product_code.']" value="'.$product_qty.'" /></td>';
									echo '<td>'.$product_name.'</td>';
									echo '<td>'.$currency.$product_price.'</td>';
									echo '<td>'.$currency.$subtotal.'</td>';
									echo '<td><input type="checkbox" name="remove_code[]" value="'.$product_code.'" /></td>';
						            echo '</tr>';
									$total = ($total + $subtotal); //add subtotal to total var
						        }
								
								$grand_total = $total + $shipping_cost; //grand total including shipping cost
								
								$list_tax       = '';
								
								$shipping_cost = ($shipping_cost)?'Shipping Cost : '.$currency. sprintf("%01.2f", $shipping_cost).'<br />':'';
							}
						    ?>
					    	<tr><td name="amnt" colspan="5"><span style="float:right;text-align: right;"><?php echo $shipping_cost. $list_tax; ?>Amount Payable : <?php echo sprintf("%01.2f", $grand_total);?></span></td></tr>
			   				<tr><td colspan="5"><a href="index.php#category" class="btn btn-success">Add More Items</a>&nbsp;&nbsp;<button type="submit" class="btn btn-primary">Update</button></td></tr>
			  			</tbody>
					</table>
					<input type="hidden" name="return_url" value="<?php $current_url = urlencode($url="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']); echo $current_url; ?>" />
				</form>
			</div>
		</div>
		<div class="col-md-6" style="border-radius: 10px; border: 10px 0px 10px 0px; border-color: #aaa;">
			<h3 class="text-center">Where you want to place order?</h3>

			<form class="text-center" method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
				<textarea style="resize: none; border-radius: 3px; border: 1px solid #bbb; padding: 10px;" maxlength="200" rows="5" cols="70" name="addrs" placeholder="Enter address where you want to place order." required></textarea><br/>
				<input type="submit" class="btn btn-success" name="Submit" value="Place Order">
				&nbsp;<input type="reset" value="Cancel" class="btn btn-danger">			
		</div>
		<div class="col-md-6">
			<?php
				include_once('Includes/Connection.php');
				$qry = "SELECT Name, Address FROM users WHERE User_Id = ".$_SESSION['user'].";";
				
				$result = mysqli_query($con, $qry);
				if($row = mysqli_fetch_array($result))
				{
					echo "<h3 class='text-center'>".$row[0]."</h3>";
					echo "<h4 class='text-center'>Your Registered Address Is - " . $row[1] . "</h4>";
					echo "<h5 class='text-center'>Dear User, We will accept cash on delivery time.</h5>";
				}
			?>
			<input type="hidden" name="uname" value="<?php echo $row[0]; ?>">
			<input type="hidden" name="amnt" value="<?php echo $grand_total; ?>">
			</form>
		</div>
	</div>
		<div class="col-xs-12 text-center">
			&copy; Copyright 2017. All rights reserved. Online Grocery System.
		</div>
	</body>

</html>
<?php } else { ?>
<h3>Something Went Wrong.!</h3>
<?php header('refresh: 3, url=Login.php'); } ?>