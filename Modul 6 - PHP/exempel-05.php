<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Exempel 5</title>
    <style>
    p{
        font-size:2em;
    }
    </style>
</head>
<body>
    <h1>PHP - Exempel 5</h1>
    <h2>Stränghanteing</h2>
    <p>
    <?php
        $name = "mahmud AL hakim";
        $br   = "<br>";
        $hr   = "<hr>";
        echo $name.$br;
        echo strtoupper($name).$br; 
        echo strtolower($name).$br;
        echo ucfirst($name).$br;
        echo ucwords($name).$br; 
        echo strrev($name).$br;
        echo "Antal tecken".strlen($name).$br;
        // Visa namnet i detta format Förnamn Efternamn
        // t.ex. Mahmud Al Hakim
        echo strtolower($name).ucwords($name).$br; // OBS! Konkatenering
        // Lösningar
        $temp =  strtolower($name);
        echo ucwords($temp).$br;
        // Eller (mycket bra att kunna)
        echo ucwords(strtolower($name)); 
    ?>
    </p>
</body>
</html>