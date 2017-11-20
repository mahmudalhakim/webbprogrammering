<?php
require('database.php');

$namn = $_POST['namn'];
$telefon = $_POST['telefon'];

$sql = "INSERT INTO kontakt VALUES('$namn','$telefon')";
mysqli_query($connection, $sql) or die(mysqli_error($connection));

// echo "$namn med följande telefonnummer $telefon har lagts till databasen.";

// Gå till filen index.php
header('Location: index.php');



echo "<hr>---------------   Felsökning   ----------------------<br>";
print ("<pre>My POST ");
print_r($_POST);
print ("</pre>");

print ("<pre>My GET ");
print_r($_GET);
print ("</pre>");

?>