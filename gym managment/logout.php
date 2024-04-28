<?php 
require_once 'config.php';
//ova go nemase ja sam si go dodade
if(isset($_SESSION['admin_id']))
{
    unset($_SESSION['admin_id']);
    header('Location: index.php');
exit();
}

?> 