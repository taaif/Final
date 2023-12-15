<?php 
include('config/db.php');
include('inc/header.php');  
include('inc/nav.php'); 
?>
 
<div class="container text-white">
    <h2 class='text-center text-white'></h2>

    <section id="content">
		<div class="content-blog content-account text-dark">
			<div class="container">
				<div class="row">
				 
					<div class="col-md-12">

			<h3>My Orders</h3>
			<br>
			<table class="cart-table account-table table table-bordered bg-white text-dark">
				<thead>
					<tr>
						<th>Total Price</th>
						<th>Order Status</th>
						<th>Date and Time</th>
					</tr>
				</thead>
				<tbody>

				<?php
					$c_id = $_SESSION['customerid'];
					$sql = "SELECT * FROM orders WHERE userid='$c_id'";
					$result = mysqli_query($conn, $sql);
					
					if (mysqli_num_rows($result) > 0) {
					while($row = mysqli_fetch_assoc($result)) {
 				?>
					<tr>
						<td>
							<?php echo $row["totalprice"] ?>
						</td>
						<td>
						<?php echo $row["orderstatus"] ?>
						</td>
						<td>
						<?php echo date('M j g:i A', strtotime($row["timestamp"])) ?>		
						</td>
					</tr>
				 
			<?php
				}
			   } else {
				 echo "0 results";
			   }
			 ?>
				
				</tbody>
			</table>		

			<div class="ma-address">
						<h3>My Address</h3>
						

						<div class="row  bg-white text-dark px-5 py-3">
				<div class="col-md-6">
								
                                <?php  
                        $sql_add = "SELECT * FROM user_data  WHERE userid='$c_id'";
                        $result_add = mysqli_query($conn, $sql_add);
                      
                     $row_add = mysqli_fetch_assoc($result_add); 
                        echo $row_add['firstname'] ." ". $row_add['lastname'] . "<br>";
                        echo $row_add['company'] . "<br>";
                        echo $row_add['address1'] . "<br>";
                        echo $row_add['city'] . "<br>";
                        echo $row_add['zip'] . "<br>";
                        echo $row_add['country'] . "<br>";
                        echo $row_add['mobile'] . "<br>";
                        ?>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
</div>

<?php include('inc/footer.php');  ?>