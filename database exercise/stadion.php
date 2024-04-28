<?php
require_once "config.php"; 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stadioni</title>
</head>
<body>
<form action="stadion.php" method="post">
<input type="text" name="ime" id="ime"><label for="ime">Ime</label><br><br>
<input type="number" name="kapacitet" id="kapacitet"><label for="kapacitet">Kapacitet</label><br><br>
<input type="submit"value="Dodaj"><br><br>
</form>
</body>
</html>


<?php 
if($_SERVER['REQUEST_METHOD'] =="POST")
{
    $ime=$_POST['ime'];
    $kapacitet=$_POST['kapacitet'];
    if(($ime===""||$kapacitet===""))
    {
        echo "nemate vneseno";
    }
    else {
       // echo $kapacitet ."<br>";
        //echo $ime;	
        $sql="INSERT INTO stadioni(stadion_ime,stadion_kapacitet)
        VALUES(?,?)";
        $run=$conn->prepare($sql);
        $run->bind_param("si",$ime,$kapacitet);
        $run->execute();

        header('Location: stadion.php');
       exit();
    }

}


?>


<table>
<thead>
    <tr>
        <th>ID</th>
        <th>Ime</th>
        <th>Kapacitet</th>
        <th>Napraven</th>
    </tr>
</thead>

<tbody>
<?php 
$sql="SELECT * FROM stadioni";
$run=$conn->query($sql);
$rezultat=$run->fetch_all(MYSQLI_ASSOC);


foreach($rezultat as $rez) : 
?>
    <tr>
        <td><?php echo $rez['stadion_id']; ?></td>
        <td><?php echo $rez['stadion_ime']; ?></td>
        <td><?php echo $rez['stadion_kapacitet']; ?></td>
        <td><?php echo $rez['stadion_napraven']; ?></td>
    </tr>
</tbody>
<?php endforeach;?>

</table>

