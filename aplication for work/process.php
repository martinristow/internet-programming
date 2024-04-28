
<html>
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
  <title>Апликација</title>
</head>
<body>  
<h3>Направивте успешна апликација</h3>
<?php
$ime = $_POST['ime'];
  $prezime = $_POST['prezime'];
  $izberi = $_POST['izberi'];
  $fav_language = $_POST['fav_language'];
?>
<?php

	date_default_timezone_set('Europe/Skopje');
	echo date("l jS \of F Y h:i:s A"). "<br><br>";

	
  if($izberi == "beziskustvo") {
	  $izberi ="Без искуство";
	} elseif($izberi == "Junior") {
		$izberi ="Junior Developer";
	} elseif($izberi == "Senior"){
		$izberi ="Senior Developer";
  }

  if($fav_language == "C++") {
	$fav_language="C++ Developer";
	  
  } elseif($fav_language == "JAVA") {
	$fav_language="Java Developer";
  } elseif($fav_language == "WEB"){
	$fav_language="Web Developer";
	
}

 
  echo "<b>$ime</b>"." "."<b>$prezime</b>"." успешно аплицираше за работното место "."<b>$fav_language</b>" ." - ".$izberi.  "<br />";
		
	
?>
</body>
</html>