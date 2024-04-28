<?php
require_once 'config.php';
require_once 'header.php';


if($_SERVER['REQUEST_METHOD'] == "POST"){
    
    $ime = $_POST['ime'];
    $price = $_POST['price'];
    $mani = $_POST['mani'];
    $country = $_POST['country'];
    
    
    $sql = "INSERT INTO products (name , price , manufacturer , country_of_origin) 
            VALUES (?, ?, ?, ?)";

    $run = $conn->prepare($sql);
    $run ->bind_param("ssss",$ime,$price,$mani,$country);
    $run ->execute();
    
    $_SESSION['success_message'] = "Uspesno gi dodadovte podatocite vo tabelata";
    
    header('location: product.php');
    exit();
    }






?>




<div class="col-md-12 container">
<table class="table table-striped">
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Price</th>
            <th>Manufacturer</th>
            <th>Country_of_origin</th>
           
        </tr>
    </thead>
    <tbody>

    <?php //php skripta 
    $sql = "SELECT * FROM products";
    $run = $conn->query($sql);

$results = $run->fetch_all(MYSQLI_ASSOC);


 foreach($results as $result) : ?>
    
<tr>
<td><?php echo $result['id_product']; ?></td>
<td><?php echo $result['name']; ?></td>
<td><?php echo $result['price']; ?></td>
<td><?php echo $result['manufacturer']; ?></td>
<td><?php echo $result['country_of_origin']; ?></td>


</tr>
<?php endforeach; ?>

    </tbody>
</table>
</div>






<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Labaratoriska 8</title>
</head>
<body><div class="container">

    <form action="product.php" method="post">
        <label for="ime">Name:</label>
        <input type="text" name="ime" id="ime"><br><br>

        <label for="price">Price:</label>
        <input type="text" name="price" id="price"><br><br>

        <label for="mani">Manifacturer:</label>
        <input type="text" name="mani" id="mani"><br><br>

        <label for="country">Country of origin:</label>
        <input type="text" name="country" id="country"><br><br>

        <button type="submit" >Add New</button>
        


    </form>
    </div>
</body>
</html>