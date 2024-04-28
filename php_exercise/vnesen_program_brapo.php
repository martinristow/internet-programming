<?php

$vnesen_prog = $_POST["vnesen_program"];

switch($vnesen_prog){

case "calc" : 
system ("calc");
break;

case "notepad" : 
system ("notepad");
break;

default :
echo "Samo calc i notepad se dozvoleni!!!";

}
?>








