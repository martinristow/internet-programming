<?php
require_once "config.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sponzori</title>
</head>
<body>
    <form action="sponzor.php" method="post">
    <input type="text"id="sponzor_ime"name="sponzor_ime"><label for="sponzor_ime">Ime</label><br><br>
    <input type="number"id="sponzor_vrednost"name="sponzor_vrednost"><label for="sponzor_vrednost">Vrednost</label><br><br>
   
    <input type="submit"value="Dodaj">
    </form>
</body>
</html>



<?php

if($_SERVER['REQUEST_METHOD'] == "POST"){
    $sponzor_ime =$_POST['sponzor_ime'];
    $sponzor_vrednost =$_POST['sponzor_vrednost'];
    	
    			
    if(!($sponzor_ime==="" || $sponzor_vrednost==="") )
    {
    
    $sql= "INSERT INTO sponzori(sponzor_ime,sponzor_vrednost)
    VALUES(?,?)";
        
       $run=$conn->prepare($sql);
       $run->bind_param("si",$sponzor_ime,$sponzor_vrednost);
       $run->execute();
    
    $_SESSION['success_message'] = "Uspesno gi dodadovte podatocite vo tabelata";
    if(isset($_SESSION['success_message'])){
        echo $_SESSION['success_message'];
        unset($_SESSION['success_message']);
    }
    header('Location: sponzor.php');
    
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
        <th>Vrednost</th>
    </tr>
</thead>

<tbody>
<?php
$sql="SELECT * FROM sponzori";
$run=$conn->query($sql);
$rezultat=$run->fetch_all(MYSQLI_ASSOC);

foreach($rezultat as $rez) : ?>

    <tr>
        <td><?php echo $rez['sponzor_id']; ?></td>
        <td><?php echo $rez['sponzor_ime']; ?></td>
        <td><?php echo $rez['sponzor_vrednost']?></td>
    </tr>
</tbody>

<?php endforeach;  
?>

</table>



