<?php
    $dbHost  = "localhost" ;
    $dbUser  = "id3557656_mahmud" ;
    $dbPwd   = "alhakim" ;
    $dbName  = "id3557656_videobutiken" ;	
    $connection   = 
    mysqli_connect($dbHost, $dbUser, $dbPwd,$dbName) 
    or die("Fel vid connect");
    // Lägg till denna rad för att lösa problem med svenska tecken.
    mysqli_set_charset($connection, "utf8");
?>