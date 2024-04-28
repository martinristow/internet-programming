<html>


<head><meta http-equiv="content-type" content="text/html; charset=utf-8" /></head>

<body>
    <form action="rashod.php" method="post">
<h3>Лице кое внесува податоци : <b>Мартин Ристов</b></h3>
<p>ИД број: <b>102620</b></p>
<label for="kompanija">Компанија: </label><input type="text" name="kompanija"id="kompanija"><br>
<label for="rashod1">1 Расход: </label><input type="text" name="rashod1"id="rashod1"><br>
<label for="rashod2">2 Расход: </label><input type="text" name="rashod2" id="rashod2"><br>
<label for="rashod3">3 Расход: </label><input type="text" name="rashod3" id="rashod3"><br>



<input type="submit" name="oki" value="Испрати">
</form>
</body>


</html>

<?php

if(isset($_POST['kompanija']))
{
$promenliva=$_POST['kompanija'];
}

if(isset($_POST['rashod1'])&&isset($_POST['rashod2'])&&isset($_POST['rashod3']))
{
$rashod1=$_POST['rashod1'];
$rashod2=$_POST['rashod2'];
$rashod3=$_POST['rashod3'];
$prosecen_rashod=($rashod1+$rashod2+$rashod3)/3;
echo "Просечниот расход е ".$prosecen_rashod."<br>";

$minimalen_rashod=min($rashod1,$rashod2,$rashod3);
echo "Минималниот расход е ".$minimalen_rashod."<br>";


$sifra=($rashod1*3)+($rashod2*7)+$rashod3+2002;
echo "Шифрата е ".$sifra;

}








?>