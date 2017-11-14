<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Exempel 9</title>
</head>
<body>
    <h1>PHP - Exempel 9</h1>
    <h2>Hämta data via URLen (Webbadress)</h2>
    <h3>Funktion isset()</h3>
    <p>
        <a href="exempel-09.php?name=<h2>Mahmud</h2>">
            Klicka här!
        </a>
    </p>
    <p>
    <?php
      $name = $_GET['name'] ?? '';
      echo $name . "<br>";
      // Rensa HTML-Koder t.ex. <script> eller <h1> osv... 
      echo htmlspecialchars($name);      
      echo "<br>";

      $tal = $_GET['tal'] ?? 0;
      if(isset($_GET['tal'])){
          echo $tal;
      }
      else{
          echo "Talet saknas!";
      }
    ?>
    </p>
</body>
</html>