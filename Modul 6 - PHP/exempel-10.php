<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Exempel 10</title>
</head>
<body>
    <h1>PHP - Exempel 10</h1>
    <h2>Hämta data via URLen (Webbadress)</h2>
    <h3>Formulär via metoden get</h3>
    <!-- <form action="<?php // echo $_PHP_SELF ?>"   > -->
    

    <form action="exempel-10.php" method="get">
        Ange ditt namn: 
        <input type="text" name="firstname">
        <input type="submit">
    </form>

    <?php 
        $name = $_GET['firstname'] ?? '';
        echo "Hej $name";
    ?>
    <hr>
    <h3>Formulär via metoden post</h3>

    <form action="exempel-10.php" method="post">
        Ange ditt lösenord: 
        <input type="password" name="password">
        <input type="submit">
    </form>

    <?php 
        $pass = $_POST['password'] ?? '';
        echo "Ditt lösendord är $pass";
    ?>




</body>
</html>