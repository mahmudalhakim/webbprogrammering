<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Exempel 7</title>
</head>
<body>
    <h1>PHP - Exempel 7</h1>
    <h2>Funktioner</h2>
    <p>
    <?php
      // Skapa en funktion
       function plus($a, $b){
           return $a+$b;
       }
       function echobr($data){
           echo $data."<br>";
       }
       function echohr($data){
           echo $data."<hr>";
       }
       // Anropa funktionen
       echo plus(5,7)."<br>";
       echo plus(20,2)."<br>";
       echo plus(11,22)."<br>";

       echobr("Test av funktionen echobr");
       echohr("Test av funktionen echohr");
       echobr("Test av funktionen echobr");
    ?>
    </p>
</body>
</html>