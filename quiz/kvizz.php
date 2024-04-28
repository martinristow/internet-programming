<?php
//MARTIN RISTOV - 102620
if ($_SERVER["REQUEST_METHOD"] == "POST") {
$odgovor1=$_POST['prvo'];
$odgovor2=$_POST['vtoro'];
$odgovor3=$_POST['treto'];
$odgovor4=$_POST['cetvroto'];
$odgovor5=$_POST['cetvrotoo'];
$odgovor55=$_POST['petto'];
$odgovor6=$_POST['sestto'];
$odgovor7=$_POST['sedmo'];
$odgovor8=$_POST['osmo'];
$odgovor9=$_POST['devetto'];
$odgovor10=$_POST['deseto'];


$poeni=0;
if($odgovor1=="dinamicki")
{
    
    //echo $odgovor1;
    $poeni++;
   

}
if($odgovor2=="prebaruvacot")
{
    $poeni++;
     
}
if($odgovor3=="dollar")
{
    $poeni++;
     
}
if($odgovor4=="ab" && $odgovor5=="bib")
{
    $poeni++;
     
}

if($odgovor55=="martin")
{
    $poeni++;
     
}

if($odgovor6=="dollar")
{
    $poeni++;
     
}

if($odgovor7=="var_dump")
{
    $poeni++;
     
}
if($odgovor8=="//,/**/")
{
    $poeni++;
     
}

if($odgovor9=="tip")
{
    $poeni++;
     
}

if($odgovor10=="6_21")
{
    $poeni++;
     
}

echo "<h2>Rezultatot e $poeni</h2>";

}
else {
    header('location : index.php');
    exit();
}
?>

<html>
<head>
<title>REZULTAT</title>
</head>
<body>

<a href="http://localhost/Lab_Sami/kviz.html"><h2>OBIDETE SE POVTORNO</h2></a>

</body>


</html>