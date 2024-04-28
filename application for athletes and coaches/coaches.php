<?php 
require_once 'config.php';
require_once 'header.php';
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coaches</title>
</head>
<body>
    <div class="container">
<p><b>Vnesi Trener</b></p>
<form action="coaches.php" method="post">
<label for="name">Name : </label>
<input type="text" id="name" name="name"><br><br>

<label for="embg">EMBG</label>
<input type="text" id="embg" name="embg"><br><br>

<input type="submit" value="Dodadi trener"  class="btn btn-primary">
</form>


</div>
</body>
</html>


<?php

if($_SERVER['REQUEST_METHOD'] == "POST"){

    if(isset($_POST['name'])&&isset($_POST['embg'])){
        $ime = $_POST['name'];
        $embg = $_POST['embg'];
       
   // echo $ime . "<br>" .$embg;

   $sql = "INSERT INTO coaches (coaches_name, coaches_embg)
   VALUES(?, ?)";

        $run = $conn->prepare($sql);
        $run ->bind_param("ss",$ime , $embg);
        $run ->execute();
        $_SESSION['success_message'] = "Uspesno gi dodadovte podatocite vo tabelata";
    
    header('location: coaches.php');
    exit();

}
}

?>

<div class="col-md-12 container">
    <br><br>
<table class="table table-striped">

<p><b>Site treneri na ucilisteto</b></p>
<thead>
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>EMBG</th>
    </tr>
</thead>
<tbody>

<?php //php skripta 
$sql = "SELECT * FROM coaches";
$run = $conn->query($sql);

$results = $run->fetch_all(MYSQLI_ASSOC);


foreach($results as $result) : ?>

<tr>
<td><?php echo $result['coaches_id']; ?></td>
<td><?php echo $result['coaches_name']; ?></td>
<td><?php echo $result['coaches_embg']; ?></td>



</tr>
<?php endforeach; ?>

</tbody>
</table>
</div>