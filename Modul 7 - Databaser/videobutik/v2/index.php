<?php
include ('header.php');
require('database.php');
$query = "SELECT Kundnummer, Namn FROM Kund ORDER BY Namn";
$kunder = mysqli_query($connection,$query)
or die(mysqli_error($connection));	
?>
<form class="form-inline my-3" action="insert.php" method="post">
<select name="kund" class="form-control mx-2">
    <?php while($row = $kunder->fetch_assoc()){ ?>
       <option value="<?php echo $row['Kundnummer'] ?>"> <?php echo $row['Namn'] ?> </option>
    <?php } ?>
</select>
<?php
$query = "SELECT FilmID,Titel FROM Film ORDER BY Titel";
$filmer = mysqli_query($connection,$query)
or die(mysqli_error($connection));	
?>
<select name="film" class="form-control mx-2">
    <?php while($row = $filmer->fetch_assoc()){ ?>
       <option value="<?php echo $row['FilmID'] ?>"> <?php echo $row['Titel'] ?> </option>
    <?php } ?>
</select>
  <button type="submit" class="btn btn-outline-primary">Hyr ut</button>
</form>
<?php
$query = "SELECT K.Namn, K.kundnummer, F.Titel, F.FilmID, U.UtDatum
FROM Uthyrning U, Kund K, Film F
WHERE U.InDatum IS NULL
AND K.Kundnummer = U.Kund
AND F.FilmID = U.Film
ORDER BY K.Namn";
$table = mysqli_query($connection,$query)
or die(mysqli_error($connection));	

echo "<table class='table'><tr>";
echo "<th>Kund</th><th>Film</th><th>Uthyrningsdatum</th><th>Återlämna</th></tr>";
while($row = $table->fetch_assoc()) : ?>
<tr>
    <td><?php echo $row['Namn'] ?> </td>
    <td><?php echo $row['Titel'] ?></td>
    <td><?php echo $row['UtDatum'] ?></td>
	<td>
    <form action='update.php' method='post'>
    <input type='hidden' name='FilmID' value="<?php echo $row['FilmID'] ;?>">
    <input type='hidden' name='kundnummer' value="<?php echo $row['kundnummer'] ;?>">
    <input type='hidden' name='UtDatum' value="<?php echo $row['UtDatum'] ;?>">
    <input type='submit' value='Lämna tillbaka' class="btn btn-outline-danger">
    </form>
    </td>
</tr>
<?php endwhile; ?>
</table>
</body>
</html>