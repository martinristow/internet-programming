<?php
require_once "config.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Klubovi</title>
</head>
<body>
    <form action="klub.php" method="post">
    <input type="text"id="ime"name="ime"><label for="ime">Ime</label><br><br>
    <input type="text"id="adresa"name="adresa"><label for="adresa">Adresa</label><br><br>
    <input type="text"id="liga"name="liga"><label for="liga">Liga</label><br><br>
    <input type="text"id="direktor"name="direktor"><label for="direktor">Direktor</label><br><br>
    <input type="submit"value="Dodaj">
    </form>
</body>
</html>



<?php

if($_SERVER['REQUEST_METHOD'] == "POST"){
    $ime =$_POST['ime'];
    $adresa =$_POST['adresa'];
    $liga =$_POST['liga'];
    $direktor =$_POST['direktor'];
    			
    if(!($ime==="" || $adresa==="" || $liga==="" || $direktor==="") )
    {
    
    $sql= "INSERT INTO klubovi(klub_ime,klub_adresa,klub_liga,klub_direktor)
    VALUES(?,?,?,?)";

    $run = $conn->prepare($sql);
    $run ->bind_param("ssss",$ime,$adresa,$liga,$direktor);
    $run ->execute();
    $_SESSION['message']['type'] = "success";
    $_SESSION['message']['text'] = "Uspesno gi dodadovte podatocite vo tabelata";
    
    header('Location: klub.php');
    echo $_SESSION['message'];
    exit();    
    }
    else {
        echo "Nemate vneseno";
        exit();
    }
   

    
   
    
}


?>

<table>
<thead>
    <tr>
        <th>ID</th>
        <th>Ime</th>
        <th>Adresa</th>
        <th>Liga</th>
        <th>Direktor</th>
    </tr>
</thead>
	
	
	
	
	
<tbody>
<?php 
$sql="SELECT * FROM klubovi WHERE klub_id>1 && klub_id<=6";
$run=$conn->query($sql);
$rezultat=$run->fetch_all(MYSQLI_ASSOC);

foreach($rezultat as $rez) : ?>
    <tr>
        <td><?php echo $rez['klub_id'] ?></td>
        <td><?php echo $rez['klub_ime'] ?></td>
        <td><?php echo $rez['klub_adresa'] ?></td>
        <td><?php echo $rez['klub_liga'] ?></td>
        <td><?php echo $rez['klub_direktor'] ?></td>
    </tr>
</tbody>
<?php endforeach; ?>

</table>

