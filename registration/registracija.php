<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
</head>
<body>
<form action="registracija.php" method="post">
<h2>Форма за регистрација</h2>
<hr>
<label for="ime_prezime"><b>Внесете име и презиме:</b></label><input type="text" name="ime" id="ime_prezime"><br>
<label for="index"><b>Број на индекс:</b></label><input type="text" name="index" id="index"><br>
<label for="korisnicko_ime"><b>Корисничко име:*</b></label><input type="text" name="korisnicko_ime" id="korisnicko_ime"><br>
<label for="lozinka"><b>Лозинка:*</b></label><input type="password" name="lozinka" id="lozinka"><br>

<input type="submit" name="oki" value="Регистрација">
</form>
</body>
</html>

<?php
echo "<br>";
if(isset($_POST['index'])&&isset($_POST['korisnicko_ime'])&&isset($_POST['lozinka'])&&isset($_POST['ime']))
{
    $ime=$_POST['ime'];
    $imee=strlen($ime);
    $lozinka=$_POST['lozinka'];
    $lozinkaa=strlen($lozinka);
    $index=$_POST['index'];
    $korisnicko_ime=$_POST['korisnicko_ime'];

    if($ime<20)//proveruva za imeto
    {
        echo "Корисничкото име може да има најмногу до 20 карактери.";
    }
    
    else if($lozinkaa<4)//proverka za lozinka
    {
        echo "Лозинката не смее да има помалку од 4 карактери.";
       
    }
    else if($index==''||$korisnicko_ime=='')//proveruvame gi indekso i korisnickoto ime istovremeno , mrze me da gi pisuvam odvoeno 
    {
        echo "Немате внесено број на индекс или корисничко име!";
    }
    else {

        if(strlen($index)>7)//ako indeksot e pogolem od 6 karakteri da ni ispecati greska

        {
            echo "Бројот на индекс не може да содржи повеќе од 6 карактери!";
        }
        else {
            echo "Успешна регистрација!<br>";//valjda smo napravile ednska neso da rabote :/

            echo "Код:".$korisnicko_ime.".".$index;//pecatenje na korisnickoto ime.indeks 
        }
       
    }
}
?>