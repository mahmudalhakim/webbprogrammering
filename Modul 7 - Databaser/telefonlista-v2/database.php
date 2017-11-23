<?php
$dbHost = "localhost"; 
$dbUser = "mahmudalhakim";
$dbPass = "TbHONG8qGAiplM58";
$dbName = "telefonlista";

$connection = 
mysqli_connect($dbHost, $dbUser, $dbPass, $dbName)
or die("Fel vid connect");

// Lägg till denna rad för att lösa problem med svenska tecken.
mysqli_set_charset($connection, "utf8");
?>