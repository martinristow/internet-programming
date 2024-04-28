<?php



require_once 'config.php';


if($_SERVER['REQUEST_METHOD'] == "POST")
{
    $username = $_POST['username'];
    $password = $_POST['password'];
  // echo $_POST['username']. "<br>";//posebno gi pecateme podatocite
  // echo $_POST['password']. "<br>";
   // var_dump($_POST);//Prifakjame gi podatocite koj se isprateni


$sql = "SELECT admin_id, password FROM admins WHERE username=?";//SQL query 
$run = $conn ->prepare($sql);//sql query go pripremame za izvrsuvanje
$run->bind_param("s",$username);//ova s znaci deka ke se zamene gore prasalnikot kaj username so promenlivata username koja sto ni e napravena
//bidejki taka e podobro , nema da moze da dojde do nekoj propusti 
$run ->execute();//pa ga izvrsemo

$results = $run ->get_result();//pa posle gi zimame rezultatite koj sto sme gi dobile posle izvrsuvanjeto


if($results->num_rows==1)
{
   $admin = $results->fetch_assoc();//vcituvame gi podatocite od forma na asocijativna niza
   //var_dump($admin['password']);
  // var_dump($admin['admin_id']);
  //if($admin['password'] === $password)//ke odeme so password verifikacija gotova funkcija
  if(password_verify($password,$admin['password']))//ovde $passowrd ni e vneseniot password od korisnikot a $admin['password'] so ova proveruvame go passwordot vo bazata
  //inaku password_verify gi sporeduva znaci go spiotoreduva $password vo nas slucaj martin123 so kriptiraniot password

  {
   // echo "Paswword e tocen";//ovde validacijata e gotova 
   $_SESSION['admin_id'] = $admin['admin_id'];
   $conn->close();//ja zatvarame konekcijata sekogas na krajot
   header('location: admin_dashboard.php');
  }
  else {
    $_SESSION['error']="Netocen Password";
    $conn->close();//ja zatvarame konekcijata sekogas na krajot
    header('location: index.php');
    exit();
  }
}
else {
    $_SESSION['error']="Netocen UserName";
    $conn->close();//ja zatvarame konekcijata sekogas na krajot
    header('location: index.php');
    exit();
}


//var_dump($results);//pecateme gi rezultatite


}


/////////////////////////////////!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!?////////////////////////////////////////
    // so ovaj kod do tuka nasiot LOGIN SYSTEM E ZAVRSEN
    //TUKA SEGA PAUZA PRODOLZUVAME SO REALNITE ZADACI PO INTERNET PROGRAMIRANJE

?>
<DOCTYPE html>
    <html>
<head>
    <title>Admin Login</title>
</head>
<body>

<?php

if(isset($_SESSION['error']))
{
    echo $_SESSION['error']."<br>";
    unset($_SESSION['error']);
}

?>

<form action="" method="POST">
    Username: <input type="text" name="username"><br>
    Password: <input type="password" name="password"><br>
    <input type="submit" value="Login">
</form>



    </body>
    </html>
