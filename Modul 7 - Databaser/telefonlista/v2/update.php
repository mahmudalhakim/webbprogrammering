<?php
include 'header.php';

/* Skriptet uppdatear en post (rad) i databasen  */

// Hämta inloggningsuppgifter från filen database.php och logga in i databasen
require('database.php');

// Hämta telefonnumret via URlen (med GET)
$telefon = $_GET['telefon'];

// Leta efter raden i databasen
$sql = "SELECT * FROM kontakt WHERE telefon='$telefon'";
$tabell = mysqli_query($connection, $sql) 
    or die(mysqli_error($connection));
// Vi får tillbaka en rad som lagras i $tabell

// Visa ett formulär och fyll textfälten från databasen
if($rad = $tabell->fetch_assoc()) :
?>

<form action="" method="post">
  <div class="row">    
    <div class="form-group col-md-5">
      <input type="text" name="namn" required
           class="form-control"
           value="<?php echo $rad['namn'] ?>">
    </div>

    <div class="form-group col-md-5">
      <input type="tel" name="telefon" required
           class="form-control" 
           value="<?php echo $rad['telefon'] ?>">
    </div>

    <div class="form-group col-md-2">
      <input type="submit" value="Ändra"
             class="btn btn-block btn-outline-primary">
    </div>
  </div>
</form>

<?php
endif;

if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $namn = $_POST['namn'];
    $tele = $_POST['telefon'];

    // Skapa SQL-satsen som uppdaterar
    $sql= "UPDATE kontakt 
           SET namn='$namn', telefon='$tele'
           WHERE telefon = '$telefon'";

    // echo $sql;

    mysqli_query($connection, $sql) 
       or die(mysqli_error($connection));
    
    // Gå till filen index.php 
    header('Location: index.php');

}
include 'footer.php';

// Felsökning

// print("<hr><pre>My GET ");
// print_r($_GET);
// print("</pre>");
// print("<pre>My POST ");
// print_r($_POST);
// print("</pre>");

?>