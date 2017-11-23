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