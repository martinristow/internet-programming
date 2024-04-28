<?php
require_once 'inc/header.php';
require_once 'app/classes/Product.php';
require_once 'app/classes/Cart.php';

$product = new Product($conn);
$product = $product->read($_GET['product_id']);

//SEGA TUKA PISUVAME REQUEST PODOBRO OBJASNETO U NOTEPAD STAVKA 21
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    //proveruvame dali prvin e najaven korisnikot poso ako ne e najaven da ne mu dozvoli da dodava elementi vo korpata
    //ova tuka jas sam si go dodadov licno , cysecor ne go pravi on ova vo proektot xD
    if(!$user->is_logged()){
        $_SESSION['message']['type'] = "danger";
        $_SESSION['message']['text'] = "Dokolku sakate da dodadete nekoj proizvod vo cart , mora da bidete najaveni";
        header('Location: login.php');
        
        exit();
    }

    $quantity =$_POST['quantity'];
    $product_id = $product['product_id'];
    $user_id =$_SESSION['user_id'];

    $cart = new Cart();
    $cart->add_to_cart($product_id , $user_id, $quantity);

    header('Location: cart.php');
    exit();
}
//echo $_GET['product_id'];
//var_dump($product);

?>

<div class="row">
    <div class="col-lg-6">
    <img src="images/<?php echo $product['image']; ?>" class="img-fluid" ?>
</div>
<div class="col-lg-6">
        <h2><?php echo $product['name'] ?></h2>
        <p>Size: <?php echo $product['size'] ?></p>
        <p>Price: $<?php echo $product['price'] ?></p>
        <form action="" method="post">  
            <input type="number" name="quantity">        
            <button type="submit" class="btn btn-primary">Add to Cart</button>
        </form>
    </div>
</div>


<?php require_once 'inc/footer.php';