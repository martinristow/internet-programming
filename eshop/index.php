<?php 
require_once 'inc/header.php'; 
require_once 'app/classes/Product.php';

$products = new Product();
$products = $products->fetch_all();

?>


<div class="row">
<?php foreach($products as $product): ?>
<div class="col-md-4">
    <div class="card">
        <img src="images/<?php echo $product['image'] ?>" class="card-img-top" alt="<?php echo $product['name'] ?>">
        <div class="card-body">
            <h5 class="card-title"><?php echo $product['name'] ?></h5>
            <p class="card-text">Size:<?php echo $product['size'] ?></p>
            <p class="card-text">Price:<?php echo $product['price'] ?></p>
            <a href="product.php?product_id=<?php echo $product['product_id'] ?>" class="btn btn-primary">View Product</a>
        </div>
    </div>
</div>
<?php endforeach; ?>

</div>


   <?php 
   //ovoj kod tuka ne bese vo php tuku nadvor od php 
   //ama za da mozam da komentiram ke go stavam u phpto 
   //bidejki sea ne ni treba 
   //<a href="register.php">Registracija</a>
   echo "test";
   ?>
<a href="register.php">Registracija</a>


   


<?php require_once 'inc/footer.php'; ?>