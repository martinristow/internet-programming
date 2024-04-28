<?php
session_start();

echo "Zdravo <br>";

$_SESSION['tekst1']=$_POST['text1'];

$_SESSION['tekst2']=$_POST['text2'];


?>
<form action="part2.php" method="post">
<button type="submit">prati</button>
</form>