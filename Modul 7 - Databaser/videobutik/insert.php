<?php 
require('database.php');
// echo "<pre>";
// print_r($_POST);
// echo "</pre>";
$kund = $_POST['kund'];
$film = $_POST['film'];
$sql= "INSERT INTO uthyrning VALUES ('$film', '$kund', CURRENT_TIMESTAMP, '')";
mysqli_query($connection, $sql) or die(mysqli_error($connection));

header("Location: index.php");
?>

