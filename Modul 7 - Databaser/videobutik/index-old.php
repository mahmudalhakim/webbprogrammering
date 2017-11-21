<?php 
$dbHost  = "localhost" ;
$dbUser  = "root" ;
$dbPwd   = "" ;
$dbName  = "videobutik" ;	
$connection   = 
mysqli_connect($dbHost, $dbUser, $dbPwd,$dbName) 
or die("Fel vid connect");
// Lägg till denna rad för att lösa problem med svenska tecken.
mysqli_set_charset($connection, "utf8");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <title>Videobutiken</title>
</head>
<body class="container">
<?php
$query = "SELECT K.Namn, F.Titel, U.UtDatum
FROM Kund K, Film F, Uthyrning U 
WHERE U.InDatum IS NULL
AND K.Kundnummer = U.Kund
AND F.FilmID = U.Film
ORDER BY U.UtDatum";
$table = mysqli_query($connection,$query)
or die(mysqli_error($connection));	

echo "<table class='table'><tr>";
echo "<th>Kund</th><th>Film</th><th>Uthyrningsdatum</th></tr>";
while($row = $table->fetch_assoc()):
?>
<tr>
    <td><?php echo $row['Namn'] ?> </td>
    <td><?php echo $row['Titel'] ?></td>
    <td><?php echo $row['UtDatum'] ?></td>
</tr>
<?php endwhile; ?>
</table>
</body>
</html>