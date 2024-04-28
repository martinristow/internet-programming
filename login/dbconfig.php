<?php
$con = mysqli_connect("localhost","root","");
if($con === FALSE) die ("Fail Message");
if(mysqli_select_db($con,"users") === FALSE)
die ("Fail Message");
 ?>
