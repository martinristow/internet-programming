<?php
require_once 'config.php';
require_once 'header.php';


if($_SERVER['REQUEST_METHOD'] == "POST"){
    
    $ime = $_POST['ime'];
    $embg = $_POST['embg'];
    $adresa = $_POST['adresa'];
    $phone = $_POST['phone'];
    $klas = $_POST['klas'];
    
    
    $sql = "INSERT INTO students (student_name , student_embg , student_address , student_phone, student_class) 
            VALUES (?, ?, ?, ?, ?)";

    $run = $conn->prepare($sql);
    $run ->bind_param("sssss",$ime,$embg,$adresa,$phone,$klas);
    $run ->execute();
    
    $_SESSION['success_message'] = "Uspesno gi dodadovte podatocite vo tabelata";
    
    header('location: students.php');
    exit();
    }



?>




<div class="col-md-12 container">
<table class="table table-striped">
    <p><b>TABELA NA SITE STUDENTI</b></p>
    <thead>
        <tr>
       
            <th>ID</th>
            <th>Name</th>
            <th>EMBG</th>
            <th>Adress</th>
            <th>Phone</th>
            <th>Class</th>
           
        </tr>
    </thead>
    <tbody>

    <?php //php skripta 
    $sql = "SELECT * FROM students";
    $run = $conn->query($sql);

$results = $run->fetch_all(MYSQLI_ASSOC);


 foreach($results as $result) : ?>
    
<tr>
<td><?php echo $result['student_id']; ?></td>
<td><?php echo $result['student_name']; ?></td>
<td><?php echo $result['student_embg']; ?></td>
<td><?php echo $result['student_address']; ?></td>
<td><?php echo $result['student_phone']; ?></td>
<td><?php echo $result['student_class']; ?></td>


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
    <br><br>
<p><b>Vnesi podatoci za studentot koj sto sakas da go dodades! </b></p>
    <form action="students.php" method="post">
        <label for="ime">Name:</label>
        <input type="text" name="ime" id="ime"><br><br>

        <label for="embg">EMBG:</label>
        <input type="text" name="embg" id="embg"><br><br>

        <label for="adresa">Address:</label>
        <input type="text" name="adresa" id="adresa"><br><br>

        <label for="phone">Phone</label>
        <input type="text" name="phone" id="phone"><br><br>

        <label for="klas">Class</label>
        <input type="text" name="klas" id="klas"><br><br>

        <input type="submit"  class="btn btn-primary" value="Dodaj Student">
        
       

    </form>
    </div>
</body>
</html>