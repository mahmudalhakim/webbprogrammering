<?php
    echo "<h1>PHP - Exempel 2</h1>";
    echo "<h2>Arbeta med variabler</h2>";
    $fname = "Mahmud";
    $lname = "Al Hakim";
    $br = "<br>";
    
    // Viktigt! Punkt i PHP konkatenerar strängar
    echo $fname." ".$lname.$br;
    
    // Vi får inte använda +
    // echo $fname+$lname; // Warning: A non-numeric value encountered
    
    // Vi får inte lägga mellanslag
    // echo $fname $lname; // Parse Error

    // Du kan skicka flera argument med kommatecken
    echo $fname,$lname; // OK 

    // OBS! problem med parenterser (vid flera argument)
    // echo ($fname,$lname); // Parse error
    echo ($fname),($lname); // Parenteser runt varje argument funkar!

   
?>