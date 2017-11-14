<?php
session_start();
?>
<h1>Hantera Sessioner - Sida 2</h1>
<h2>
<?php
// Hämta namnet från sessionen
echo "Hej " . $_SESSION['user'] ?? '';

echo "<pre>";
print_r($_SESSION);
echo "</pre>";

?>
</h2>
<p>
    <a href="exempel-12.php">Gå tillbaka</a>
    <br>
    <a href="exempel-14.php">Logga ut</a>
</p>