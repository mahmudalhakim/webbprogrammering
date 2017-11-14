<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Exempel 8</title>
</head>
<body>
    <h1>PHP - Exempel 8</h1>
    <h2>Hämta data via URLen (Webbadress)</h2>
    <p>
    <?php
      $fname = $_GET['fname'] ?? 'FÖRNAMN';
      $lname = $_GET['lname'] ?? 'EFTERNAMN';
      echo "Hej $fname $lname!";
    ?>
    </p>
</body>
</html>