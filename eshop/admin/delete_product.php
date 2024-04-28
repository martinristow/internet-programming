<?php
require '../app/config/config.php';
require '../app/classes/User.php';
require '../app/classes/Product.php';

$user = new User();
    
if($user->is_logged() && $user->is_admin() ) : //AKO OVOJ USLOV E ISPOLNET TOGAS TOA ZNACI DEKA KORISNIKOT
    //E NAJAVEN I ISTIOT E ADMIN  
    $product = new Product();
    $product_id = $_GET['id'];//tuka so get['id] go zimame bidejki taka ni e napisano vo a href u index delete_product.php?id=
    
    $product->delete($product_id);

    header('Location: index.php');
    

endif;

?>