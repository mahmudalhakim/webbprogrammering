<?php
include ('header.php');
require('database.php');
$filmID= $_GET['filmID']; 
$titel = $_GET['Titel'];
?>
<h1>Du har valt <?php echo $titel; ?></h1>
<form action="" method="post" class="form-inline">

    <label for="kund">Ange kundnummer</label>
    <input type="number" name="kund" id="kund" required
           class="form-control mx-3"
           placeholder="Ange ditt kundnummer">
  
    <button class="btn btn-outline-primary">Beställ</button>
    
</form>

<?php
if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $kundnummer = $_POST['kund'];
    // Kolla om kunden finns i databasen
    $sql= "SELECT * FROM Kund WHERE kundnummer = $kundnummer";
    $res= mysqli_query($connection, $sql) or die(mysqli_error($connection));
    
    if($kund = $res->fetch_assoc()){ // Ja kunden finns
        // Skicka ett mejl till butiken
        $meddelande = $kund['namn'] . " har beställt $titel \n";
        $meddelande .= "Skicka filmen till följande adress: \n\n";
        $meddelande .= $kund['gatuadress'] . "\n"; 
        $meddelande .= $kund['postnummer'] . "\n";
        $meddelande .= $kund['ort']; 
        // Några argument
        $till = "mahmud.alhakim@gmail.com";
        $rubrik = "Beställning från videobutiken";
        $headers = "From: order@videobutik.com";
        // funktionen mail kräver en mail-server (funkar ej lokalt)
        if (mail($till, $rubrik, $meddelande, $headers)){
            echo "Mejl har skickats";
        }
        else{
            echo "Problem med mejl";
        }
        
        // Skicka beställningen till databasen
        $sql= "INSERT INTO Uthyrning 
               VALUES ('$filmID', '$kundnummer', CURRENT_TIMESTAMP, '')";
        mysqli_query($connection, $sql) or die(mysqli_error($connection));
        $msg = 1;

     }else{ // Kunden finns inte
            $msg = 0;
     }
    
     header("Location: index.php?msg=$msg");
     // Vid problem med header på vissa servrar kör med JavaScript istället
     echo "<script> document.location = 'index.php?msg=$msg'; </script>";
}

// echo "<hr>---------------   Felsökning   ----------------------<br>";
// print ("<pre>My POST ");
// print_r($_POST);
// print ("</pre>");
// print ("<pre>My GET ");
// print_r($_GET);
// print ("</pre>");
?>

</body>
</html>
