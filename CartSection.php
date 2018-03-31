<!-- view cart box -->
<?php
session_start("cart_products");
if(isset($_SESSION["cart_products"]) && count($_SESSION["cart_products"])>0)
{
	//echo count($_SESSION["cart_products"]); ?>
	<div class="cart-view-table-front" id="view-cart">
		<h3 class="text-center text-success">Items in Your Basket</h3><!--i class="fa fa-shopping-cart fa-3x"></i-->
		<form method="post" action="cartUpdate.php">
		<table width="100%" class="table table-hover table-striped cart-items text-center">
			<tr> <!--style="background:linear-gradient(black,dimgrey);color:white;"-->
				<th class="text-center">Quantity in packets</th>
				<th class="text-center">Product Name</th>
				<th class="text-center">Remove from Cart</th>
			</tr>
			<?php
				$total =0;
				$b = 0;
		
				foreach ($_SESSION["cart_products"] as $cart_itm)
				{
					$product_name = $cart_itm["product_name"];
					$product_qty = $cart_itm["product_qty"];
					$product_price = $cart_itm["product_price"];
					$product_id = $cart_itm["product_id"];

			echo '<tr class=" ">';
				echo '<td><input type="number" size="2" maxlength="2" name="product_qty['.$product_id.']" value="'.$product_qty.'" class="text-center input-quantity" style="width: 50px; border: 1px solid #ddd;"/></td>';
				echo '<td>'.$product_name.'</td>';
				echo '<td><input type="checkbox" name="remove_code[]" value="'.$product_id.'" /> Remove</td>';
			echo '</tr>';
				$subtotal = ($product_price * $product_qty);
				$total = ($total + $subtotal);
				}
			echo '<tr>';
				echo '<td colspan="4">';
				echo '<button type="submit" class="btn btn-success">Update</button> &nbsp; &nbsp;<a href="FinalOrder.php" class="btn btn-primary">Checkout</a>';
				echo '</td>';
			echo '</tr>';
		echo '</table>';
		$current_url = urlencode($url="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
		echo '<input type="hidden" name="return_url" value="'.$current_url.'" />';
		echo '</form>';
	echo '</div>';
}
?>

<!-- end of cart box -->




