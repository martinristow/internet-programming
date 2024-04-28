<html>
<head><meta http-equiv="content-type" content="text/html; charset=utf-8" /></head>


<body>
    <form action="presmetka_na_plata.php" method="post">
<h2>Апликација за пресметка на плата</h2>
<hr>
<p><b>Лице за кое се пресметува плата : Мартин Ристов</b></p>
<p><b>ИД.број: 102620</b></p>
<br>
<label for="sifra"><b>Шифра: </b></label><input type="text" name="sifra" id="sifra"><br>
<label for="broj"><b>Број на месечни работни часови: </b></label><input type="text" name="broj" id="broj"><br>
<label for="suma"><b>Сума за 1 час: </b></label><input type="text" name="suma" id="suma"><br>
<label for="odbitoci"><b>Одбитоци на плата: </b></label><input type="text" name="odbitoci" id="odbitoci"><br>
<label for=""><b>Плата за последните 3 месеци :</b></label><br>
<label for="mesec1">Месец1:</label><input type="text" name="meseci1" id="mesec1">
<label for="mesec2">Месец2:</label><input type="text" name="meseci2" id="mesec2">
<label for="mesec3">Месец3:</label><input type="text" name="meseci3" id="mesec3">
<br><br>
<input type="submit" value="Пресметај">
<br>
</form>
</body>
</html>


<?php


    //PROVERUVAME DALI KORISNIKOT VNEL PODATOCI , AKO VNEL ISTITE GI PRIFAKJAME I PRODOLZUVAME SO RABOTA SO NIV
    if(isset($_POST['meseci1'])&&isset($_POST['meseci2'])&&isset($_POST['meseci3'])&&isset($_POST['sifra'])&&isset($_POST['odbitoci'])&&isset($_POST['suma'])&&isset($_POST['broj'])){
    $mesec1 = $_POST['meseci1'];
    $mesec2 = $_POST['meseci2'];
    $mesec3 = $_POST['meseci3'];
    $sifra = $_POST['sifra'];
    $odbitoci = $_POST['odbitoci'];
    $suma = $_POST['suma'];
    $broj = $_POST['broj'];

    //PLATA ZA TEKOVEN MESEC
    $plata_za_tekoven_mesec = ($broj*$suma)-$odbitoci;
    echo "Плата за тековен месец: <b>$plata_za_tekoven_mesec</b>";
    echo "<br>";
    ////////////////////////////////////
    


    //MAKSIMALNA PLATA
    $maksimalna_plata=max($plata_za_tekoven_mesec,$mesec1,$mesec2,$mesec3);
    echo "Максимална плата во последните 4 месеци : <b>$maksimalna_plata</b> ден.";
    echo "<br>";
    ///////////////////////////////////////


    //PRESMETUVANJE NA KOD
    $mesec_na_ragjanje=3;
    $den_na_ragjanje=7;
    $godina_na_ragjanje=2002;
    $kod=$sifra*$mesec_na_ragjanje+$den_na_ragjanje+$godina_na_ragjanje;
    echo "Код : <b>$kod</b>";
    //////////////////////////////////////
    
}







//echo $mesec1 ."<br>". $mesec2. "<br>". $mesec3;

?>