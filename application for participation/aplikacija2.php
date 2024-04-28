<?php
if ($_SERVER["REQUEST_METHOD"] == "POST"){


    $izbor=$_POST['dada'];
    $sifra=$_POST['meow'];
    
   


if($sifra >99&&$sifra<=999)

{



    
    $mesec_na_ragjanje = 3;
    $den_na_ragjanje =7;
    $godina_na_ragjanje =2002;
    $safta=$sifra*$mesec_na_ragjanje+$den_na_ragjanje+$godina_na_ragjanje;
   // echo $safta;
    

if($izbor == 'mat')
{
    echo "Uspesna aplikacija za seminarot od oblasta <b>$izbor</b> <br>";
   
    echo "Vasiot kod e <b>$safta</b>";
}
else if($izbor == 'inform'){
    echo "Uspesna aplikacija za seminarot od oblasta <b>$izbor</b> <br>";
    echo "Vasiot kod e <b>$safta</b>";
}

else {
    echo "Uspesna aplikacija za seminarot od oblasta <b>$izbor</b> <br>";
    echo "Vasiot kod e <b>$safta</b>";
}
}
else {
    if($sifra<99){
        echo "Vnesovte broj koj e pomal od 100 ";
    }
    else {
        echo "Vnesovte broj koj sto e pogolem od 999";
        
    }
    echo "<a href='http://localhost/kolokviumski_zadaci/prva/zadaca1.html'><h4>VNESETE POVTORNO</h4></a>";
}

}

?>