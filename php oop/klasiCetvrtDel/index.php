<?php
//require "Admin.php";
require "Employee.php";


//$novUser = new User("Martin");

//echo $novUser->getIme();


//$admin1 = new Admin("marko",1);
//echo $admin1->isAdmin(1);
$vraboten1 = new Employee("Martin","234");
echo $vraboten1->getCas();
echo "<br>";
$vraboten1->test(3);
//$vraboten1->test(2);
echo "<br>";
$vraboten1->isLogged(111);
?>