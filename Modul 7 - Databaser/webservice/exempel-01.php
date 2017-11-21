<!doctype html>
<html lang="en">
  <head>
    <title>Kundlistan</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
  </head>
  <body class="container">
    <h1>Alla kunder</h1>

    <!-- Optional JavaScript -->


<?php

// Hämta en Json-lista via HTTP (OBS! JSON-format)
$data = file_get_contents("https://jsonplaceholder.typicode.com/users");
// Test
// echo "<pre>$data</pre>";

// Konvertera JSON-listan till PHP-Array
$array = json_decode($data, true);

// Välj alla namn från vår array
echo "<table class='table'>";
echo "<tr><th>Namn</th><th>Telefon</th><th>Stad</th><th>Företag</th></tr>";
foreach ($array as $key => $value) {
    echo "<tr>";
    echo "<td>" . $value['name'] . "</td>";
    echo "<td>" . $value['phone'] . "</td>";
    echo "<td>" . $value['address']['city'] . "</td>";
    echo "<td>" . $value['company']['name'] . "</td>";
    echo "</tr>";
}
echo "</table>";


// Felsökning - Skriv ut en array
print("<hr><pre>");
print_r($array);
print("</pre>");
?>


    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
  </body>
</html>
