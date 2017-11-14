<?php
session_start();
?>
<h1>Hantera Sessioner - Sida 1</h1>
<form action="exempel-12.php" method="post">
    Skriv ditt namn:     
    <input type="text" name="user">
    <input type="submit">
</form>
<h2>
<?php 
if(isset($_POST['user'])){
    $name = $_POST['user'] ;
    echo "Hej $name (OBS! Namnet försvinner här!)"; 
    // Lagra namnet i en sessionsvariabel
    $_SESSION['user'] = $name;
}
echo "<br>";


// Visa sessionsvariabeln
echo $_SESSION['user'] ?? '';

echo "<pre>";
print_r($_SESSION);
echo "</pre>";

?>
</h2>
<p>
    <a href="exempel-13.php">Gå till nästa sida</a>
    <br>
    <a href="exempel-14.php">Logga ut</a>
</p>

