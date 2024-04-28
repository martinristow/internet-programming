<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  
</body>
</html>


<?php 

require_once "db.php";

if($_SERVER['REQUEST_METHOD'] == "POST"){
    $ime=$_SESSION['ime'];
    
    
echo $ime;


}




?>