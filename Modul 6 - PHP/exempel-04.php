<?php
    $webmaster = "Mahmud Al Hakim";
    $title     = "Exempel 4";
    $address   = "Malmvägen 1, 111 12 Stockholm";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title><?= $title ?></title>
</head>
<body>
    <h1>PHP - Exempel 4</h1>
    <h2>Mer om variabler och strängar</h2>
    <p>Vår webmaster heter <?php echo $webmaster ?></p>
    <h3>Strängar inom enkla citatonstecken</h3>
    <p>
        <?php echo "Vår <strong>webmaster</strong> heter $webmaster 
        och vår <em>adress</em> är $address. <br>"?>
        <?php echo 'Vår <strong>webmaster</strong> heter $webmaster 
        och vår <em>adress</em> är $address' ?>
    </p>
    <h3>Escape-sekvenser</h3>
    <p>
        <?php 
            echo "Jag heter \"Mahmud\" <br>"; // Jag heter "Mahmud" 
            echo 'Jag heter \"Mahmud\" <br>'; // Jag heter \"Mahmud\" 
            echo 'Jag heter \'Mahmud\' <br>'; // Jag heter 'Mahmud'  
            echo "Jag heter \'Mahmud\' <br>"; // Jag heter \'Mahmud\'
           
           // En lösning utan Escape-sekvenser  
            echo "Jag heter 'Mahmud' <br>";   // Jag heter 'Mahmud'  
            echo 'Jag heter "Mahmud" <br>';   // Jag heter "Mahmud"  
                       
            echo "<h4> Variabler inne i stängen</h4>";
            echo "Jag heter \"$webmaster\" <br>"; // Jag heter "Mahmud Al Hakim" 
            echo "Jag heter \'$webmaster\' <br>"; // Jag heter \'Mahmud Al Hakim\' 
            echo "Jag heter '$webmaster' <br>";   // Jag heter 'Mahmud Al Hakim' 
            // Problem med enkla citationstecken
            echo 'Jag heter \'$webmaster\' <br>'; // Jag heter '$webmaster'   
            echo 'Jag heter \"$webmaster\" <br>'; // Jag heter \"$webmaster\"  
            echo 'Jag heter "$webmaster" <br>';   // Jag heter "$webmaster"   
        ?>
    </p>
    <footer>
        <hr>
        <p>&copy; <?php echo $title ?> 
        &bull; 
        Adress: <?php echo $address ?><br>
        Kontakt: <?php echo $webmaster ?> 
        </p> 
    </footer>
</body>
</html>