<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Exempel 6</title>
</head>
<body>
    <h1>PHP - Exempel 6</h1>
    <h2>Datum och tid</h2>
    <p>
    <?php
        $br   = "<br>";
        echo "Dagens datum är: " . date("Y-m-d") . $br;
        echo "Dagens datum är: " . date("ymd") . $br;
        echo "Klockan är: " . date("H:i:s") . $br;
        echo "Datum och tid: " . date("Y-m-d H:i:s") . $br;
        echo "Copyright &copy; " . date("Y");
    ?>
    </p>
</body>
</html>