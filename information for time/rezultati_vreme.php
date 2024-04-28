<?php
if(isset($_POST['utrinski_casovi'])&&isset($_POST['popladnevni_casovi'])&&isset($_POST['vecerni_casovi']))//prifakjame gi vrednostite od html dokumento
{
$utrinski_casovi=$_POST['utrinski_casovi'];
$popladnevni_casovi=$_POST['popladnevni_casovi'];
$vecerni_casovi=$_POST['vecerni_casovi'];

if(!($utrinski_casovi==''||$popladnevni_casovi==''||$vecerni_casovi==''))//ako korisnikot gi vnel potrebnite informacii ke se izvrse kodo podolu vo sprotivno ke se ispecate ERROR 
{
    $today =date("d-m-Y");//dodeluvame go datumot 
    $prosecna_temperatura=($utrinski_casovi+$popladnevni_casovi+$vecerni_casovi)/3;//naogjame prosecna temperatura 
    $den_na_ragjanje=7;//licni informacii
    $mesec_na_ragjanje=3;//licni informacii
    $godina_na_ragjanje=2002;//licni informacii

    $vrednost=($utrinski_casovi*$popladnevni_casovi*$vecerni_casovi*$den_na_ragjanje*$mesec_na_ragjanje)+$godina_na_ragjanje;//ovaa formula e dadena vo kolokviumot 
    echo "<h2>Детален приказ:</h2>";//pecatime spored baranjeto na zadacata
    echo "<b>Инфо за температурата за ден $today</b><br><br>";
    echo "Утрински часови : $utrinski_casovi C";
    echo "<br>";
    echo "Попладневни часови : $popladnevni_casovi C";
    echo "<br>";
    echo "Вечерни часови $vecerni_casovi C";
    echo "<br><hr>";
    echo "Просечната температура изнесува :$prosecna_temperatura C";
    echo "<br><hr>";
    echo "Вредност : $vrednost";
}
else {
    echo "ERROR";//Ako nema vneseno nekoe pole 
}

}
?>