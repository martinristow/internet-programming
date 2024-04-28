<?php 

require_once 'config.php';
require_once 'header.php';

?>
	

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sports Groups</title>
</head>
<body>
    <div class="container">
<p><b>Vnesi Sportski Grupi</b></p>
<form action="sportgroups.php" method="post">
<label for="lokacija">Location : </label>
<input type="text" id="lokacija" name="lokacija"><br><br>

<label for="den_od_nedelata">Day Of Week</label>
<input type="text" id="den_od_nedelata" name="den_od_nedelata"><br><br>

<label for="hour">Hour</label>
<input type="text" id="hour" name="hour"><br><br>

<label for="coaches_id">ID coach</label>
<input type="text" id="coaches_id" name="coaches_id"><br><br>

<input class="btn btn-primary" type="submit" value="Dodaj Grupa">
</form>

<br>
</div>
</body>
</html>


<?php



if ($_SERVER['REQUEST_METHOD'] == "POST") {
    if (isset($_POST['lokacija']) && isset($_POST['den_od_nedelata']) && isset($_POST['hour']) && isset($_POST['coaches_id'])) {
        $lokacija = $_POST['lokacija'];
        $den = $_POST['den_od_nedelata'];
        $hour = $_POST['hour'];
        $coaches_id = $_POST['coaches_id'];

        $sql = "INSERT INTO sportgroups (location, dayOfWeek, hour, coaches_id) VALUES (?, ?, ?, ?)";

        $run = $conn->prepare($sql);
        $run->bind_param("sssi", $lokacija, $den, $hour, $coaches_id);
        $run->execute();
        $_SESSION['success_message'] = "Uspesno gi dodadovte podatocite vo tabelata";

        header('location: sportgroups.php');
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
    <div class="container">
<p><b>Sportski Grupi</b></p>    


<table class="table table-striped">
<thead>
    <tr>
        <th>Location</th>
        <th>Day Of The Week</th>
        <th>Hour</th>
    </tr>
</thead>
<tbody>

<?php //php skripta 
$sql = "SELECT * FROM sportgroups";
$run = $conn->query($sql);

$results = $run->fetch_all(MYSQLI_ASSOC);


foreach($results as $result) : ?>

<tr>
<td><?php echo $result['location']; ?></td>
<td><?php echo $result['dayOfWeek']; ?></td>
<td><?php echo $result['hour']; ?></td>



</tr>
<?php endforeach; ?>

</tbody>


</table>





</div>

</body>
</html>