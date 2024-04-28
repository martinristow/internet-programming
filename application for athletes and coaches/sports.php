<?php 

require_once 'config.php';
require_once 'header.php';


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sports</title>
</head>
<body>
<div class="container">
<p><b>Dodadi nov tip na sport ! </b></p>

<form action="sports.php" method="post">
<label for="sport">Sport:</label>
<input type="text" name="sport" id="sport"><br><br>

<input type="submit" value="Dodadi Sport"  class="btn btn-primary">
</form>
</div>

</body>
</html>

<?php 

if($_SERVER['REQUEST_METHOD'] == "POST" ){

    if(isset($_POST['sport'])){
        $sport = $_POST['sport'];
      //  echo $sport;


      $sql = "INSERT INTO sports(sports_name)
      VALUES(?)";
      $run = $conn->prepare($sql);
      $run ->bind_param("s",$sport);
      $run ->execute();

        $_SESSION['success_message'] = "Uspesno go dodadovte noviot sport";
        header('location: sports.php');
        exit();
      

    }

}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
</head>
<body>
    <div class="col-md-12 container">
   <br><br>
<p><b>Lista na momentalni sportovi</b></p>

<table class="table table-striped">
<thead>
    <tr>
        <th>ID</th>
        <th>Name</th>
    </tr>
</thead>

<tbody>
<?php 

$sql = "SELECT * FROM sports";
$run = $conn->query($sql);

$results = $run->fetch_all(MYSQLI_ASSOC);


foreach($results as $result) : ?>

<tr>
    <td><?php echo $result['sports_id'] ?></td>
    <td><?php echo $result['sports_name'] ?></td>
</tr>
<?php endforeach; ?>

</tbody>

</table>



</div>
</body>
</html>