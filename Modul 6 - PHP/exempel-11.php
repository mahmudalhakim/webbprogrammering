<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Exempel 11</title>
</head>
<body>
    <h1>PHP - Exempel 11</h1>
    <h2>Arbeta med Arrays</h2>
    <p>
    <?php
        // Skapa en array
        $cars = array("Volvo" , "Toyota");

        // Lägg till flera element
        $cars[] = "BMW";

        // Indexering
        echo "Jag tycker om " . $cars[0] . " och " . $cars[2] . "<br>";
        echo "Jag tycker inte om $cars[1]";
        echo "<hr>";

        // Skriv ut en hel array
        echo "<pre>";
        print_r($cars); // används vid felsökning
        echo "</pre>";

        // Gå igenom en array med en loop
        echo "<ul>";
        foreach ($cars as $key => $value) {
            echo "<li>$value</li>";
        }
        echo "</ul>";

        // Skirv ut en tabell
        echo "<table style='border:thin solid red'>";
        echo "<tr><th>Nummer</th> <th>Model</th></tr>";
        foreach ($cars as $key => $value) {
            echo "<tr><td>$key</td>  <td>$value</td></tr>";
        }
        echo "</table>";

        foreach ($variable as $key => $value) {
            # code...
        }


    ?>
    </p>

</body>
</html>