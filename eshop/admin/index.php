<?php
require '../app/config/config.php';
require '../app/classes/User.php';
require '../app/classes/Product.php';

$user = new User();
    
if($user->is_logged() && $user->is_admin() ) : //AKO OVOJ USLOV E ISPOLNET TOGAS TOA ZNACI DEKA KORISNIKOT
    //E NAJAVEN I ISTIOT E ADMIN  
    $products = new Product();
    $products = $products->fetch_all();
    
    ?>

    <!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Admin</title>
</head>
<body>

<div class="container">

<a href="add_product.php" class="btn btn-success">Add Product</a>

<table class="table table-striped">
    <thead>
        <tr>
            <th scope="col">Product ID</th>
            <th scope="col">Name</th>
            <th scope="col">Price</th>
            <th scope="col">Size</th>
            <th scope="col">Image</th>
            <th scope="col">Created At</th>
            <th scope="col">Actions</th>            
        </tr>
    </thead>

    <tbody>
    <?php foreach($products as $product) :?>
        <tr>
            <th scope="row"><?php echo $product['product_id']; ?> </th>
            <td><?php echo $product['name'] ?></td>
            <td><?php echo $product['price'] ?></td>
            <td><?php echo $product['size'] ?></td>
            <td><?php echo $product['image'] ?></td>
            <td><?php echo $product['created_at'] ?></td>
            <td>
                <a href="edit_product.php?id=<?php echo $product['product_id']; ?>"class="btn btn-primary">Edit</a>
                <a href="delete_product.php?id=<?php echo $product['product_id']; ?>"class="btn btn-danger">Delete</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>

</div>


<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>
    
    
<?php endif; ?>