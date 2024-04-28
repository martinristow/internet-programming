<?php
require '../app/config/config.php';
require '../app/classes/User.php';
require '../app/classes/Product.php';

$user = new User();
    
if($user->is_logged() && $user->is_admin() ) : //AKO OVOJ USLOV E ISPOLNET TOGAS TOA ZNACI DEKA KORISNIKOT
    //E NAJAVEN I ISTIOT E ADMIN  
    $product_obj = new Product();
    $product = $product_obj->read($_GET['id']);
    
    //SEGA SO REQUEST_METHOD TREBA DA GI PREZEMEME INFORMACIITE
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $product_id = $_GET['id'];
        $name = $_POST['name'];
        $price = $_POST['price'];
        $size = $_POST['size'];
        $image = $_POST['image'];

        $product_obj->update($product_id, $name , $price , $size , $image);

        header("Location: edit_product.php?id=".$product_id);
        exit();
    }


endif;

?>

<form action=""method="post">


<input type="text" name="name" value="<?php echo $product['name']; ?>">
<input type="text" name="price"step="0.01" value="<?php echo $product['price']; ?>">
<input type="text" name="size" value="<?php echo $product['size']; ?>">
<input type="text" name="image" value="<?php echo $product['image']; ?>">
<input type="submit" value="Update Product">
</form>