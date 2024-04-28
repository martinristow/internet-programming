<?php

$ime=$_POST['ime'];
$br_index=$_POST['indeks'];
$sifra=$_POST['dada'];
$programski_jazik=$_POST['skr'];


if($ime==""||$br_index==""||$sifra==""||$programski_jazik=="")
{
echo "ERROR";
exit();

}
else {




if($programski_jazik=="C++")
{
    echo "Успешна апликација за натпреварот по програмиранје во програмскиот јазик $programski_jazik<br>";
    echo "Vasiot kod e <b>$sifra";
}
else if($programski_jazik=="Java")
{
    echo "Успешна апликација за натпреварот по програмиранје во програмскиот јазик $programski_jazik<br>";
    echo "Vasiot kod e <b>$sifra";
}
else 
{
    echo "Успешна апликација за натпреварот по програмиранје во програмскиот јазик $programski_jazik <br>";
    echo "Vasiot kod e <b>$sifra";
}
}


?>