<?php include('inc/header.php');  ?>

<?php include('inc/nav.php');  

include('config/db.php');

if(isset($_GET['id'])){
    $product_id = $_GET['id'];
   $sql = "SELECT * FROM products  WHERE product_id='$product_id'";
   $result = mysqli_query($conn, $sql);
 
$row = mysqli_fetch_assoc($result);

$product_name  = $row['product_name'];
$cat_id  = $row['cat_id']; 
$price  = $row['price'];
$product_description  = $row['product_description'];
$thumb  = $row['thumb'];
}

?>
  
<div class="container">

    <div class="row text-daark">
        <div class="col-md-6 ">
            <img src="admin/<?php echo $thumb ?>" alt="" class='img-fluid rounded' style='height:400px;width:400px;'>
        </div>
        <div class="col-md-6 pt-5">
        <h3><b><?php echo $product_name ?></b></h3>
        <h2><b>SAR <?php echo  $price ?>.00 </b></h2>
<p>     <?php echo $product_description ?></p>            
       
<div class="row">
    <div class="col-md-2">
        Quantity:
    </div>
    <div class="col-md-2">
    <form action='addToCart.php'>  
    <input type="hidden" name='id' value='<?php echo  $product_id ?>'>
        <input type="number" class='form-control' name='quantity' value='1'> 
       
    </div>
   
</div>
<div class="row ">
    <div class="col-md-12 category">

    <?php
                  
        
        $sql2 = "SELECT * FROM Category where cat_id = '$cat_id'";
        $result2 = mysqli_query($conn, $sql2); 
                      
        $row2 = mysqli_fetch_assoc($result2)
        ?> 
        From Category : <a class="text-dark" href="index.php?id=<?php echo $cat_id ?>"><?php echo $row2["cat_name"] ?></a>   
                
    </div>
</div>
<div class="row mt-4">
    <div class="col-md-4">
    <button  type='submit' class="btn btn-outline-success btn-xs pull-right"  >
                        <i class="fa fa-cart-arrow-down"></i> Add To Cart
                    </button>
    </div>
</div>
</form>


















































</div>





<?php include('inc/footer.php');  ?>



