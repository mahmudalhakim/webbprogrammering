<?php 
require('../database.php');
// echo "<pre>";
// print_r($_POST);
// echo "</pre>";
$kundnummer = $_POST['kundnummer'];
$FilmID = $_POST['FilmID'];
$UtDatum = $_POST['UtDatum'];

$sql= "UPDATE Uthyrning SET inDatum = CURRENT_TIMESTAMP 
       WHERE kund = '$kundnummer' AND Film = '$FilmID' AND utDatum = '$UtDatum'";
mysqli_query($connection, $sql) or die(mysqli_error($connection));

header("Location: index.php");
?>

