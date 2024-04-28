<?php require_once "db.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action = "part3.php" method="post">
    <input type="text" name="ime" required><label for="ime">vnesi ime</label><br>
    <input type="text" name="user" required><label for="user">vnesi user</label><br>
    <input type="email" name="mail" required><label for="mail">vnesi mail</label><br>
    <button type="submit">prati</button>
    </form>
</body>
</html>


<?php



if($_SERVER['REQUEST_METHOD'] == "POST"){
    $ime=$_POST['ime'];
    $user=$_POST['user'];
    $mail=$_POST['mail'];
    
    $sql="INSERT INTO part(name,username,email) VALUES(?,?,?)";

    $run=$conn->prepare($sql);
    $run-> bind_param("sss",$ime,$user,$mail);
    $run-> execute();


}


?>


<br><br><hr><br>

<?php

$sql="SELECT * FROM part";
$run=$conn->query($sql);
$result=$run->fetch_all(MYSQLI_ASSOC);

foreach($result as $rez) : ?>

<form action="part4.php" method="post">
<p><?php echo $rez['id'] ?></p>
<p><?php echo $rez['name'] ?></p>
<p><?php echo $rez['username'] ?></p>
<p><?php echo $rez['email'] ?></p>
<p><?php echo $rez['date'] ?></p>
<button type="submit">izmeni</button>

<?php  endforeach;?>

