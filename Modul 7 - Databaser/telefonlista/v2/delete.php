<?php

/* Skriptet tar bort en post (rad) från databasen  */

// Hämta inloggningsuppgifter från filen database.php och logga in i databasen
require('database.php');

// Hämta data via URlen (med GET)
if(isset($_GET['telefon'])){
    $telefon = $_GET['telefon'];

    // Skapa SQL-satsen
    $query = "DELETE FROM kontakt WHERE telefon = '$telefon'";

    // Exekvera SQL-satsen
    mysqli_query($connection, $query) or die(mysqli_error($connection));
}
// Gå till filen index.php
header('Location: index.php');

// Felsökning
print("<pre>");
print_r($_GET);
print("</pre>");
?>