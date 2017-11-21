<?php
// Skapa en JSON-fil
require('../telefonlista/database.php');
$query = "SELECT * FROM kontakt";
$table = mysqli_query($connection, $query) 
         or die(mysqli_error($connection));
$tempArray = array();
while($row = $table->fetch_assoc() ){
    $tempArray[] = $row;
 }
$json_string = json_encode($tempArray, JSON_PRETTY_PRINT);
echo "<pre>$json_string</pre>";    
?>