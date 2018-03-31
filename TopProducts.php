<style type="text/css">
	.img-thumbnail {
		margin:auto!important; height: 200px!important; width: 300px!important;
	}
	.img-thumbnail:hover {
		box-shadow: 0px 0px 10px #333;
	}

</style>
			<div class="row">
				<h3 class="text-center">Top Products</h3>
				<?php
				$sql = "SELECT product_name FROM product"; /* ORDER BY product_id DESC */
				$result = mysqli_query($con, $sql);
				if(!$result)
				{
					die('Could not get Data !' . mysqli_error());
				}
				$flag = 1;
				$rowcount = mysqli_num_rows($result);
				for ($i=1; $i<=4; $i++) {
				    $image = "uploads/p" . $i . ".jpg";
				    echo "<div class='col-md-3 text-center' style='padding: 0px;'>";
				    echo "<img class='img-thumbnail' style='' src='".$image."'/><br/>";
					while($row1 = mysqli_fetch_array($result))
					{
						echo "<h4 class='text-primary'>".$row1[0]."</h4>";	// <a href='".str_replace(' ', '', $row1[0]).".php'>
						$flag++;
						if($flag!=$i)
							break;
					}
				    echo "</div>";
				}
				?>
			</div>