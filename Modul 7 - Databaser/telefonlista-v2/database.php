<?php
$dbHost = "localhost"; 
$dbUser = "root";
$dbPass = "";
$dbName = "telefonlista";

$connection = 
mysqli_connect($dbHost, $dbUser, $dbPass, $dbName)
or die("Fel vid connect");

// Lägg till denna rad för att lösa problem med svenska tecken.
mysqli_set_charset($connection, "utf8");
?>