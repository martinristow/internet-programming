<?php
include "functions/init.php";
user_restrictions();
session_destroy();

redirect("index.php");
?>