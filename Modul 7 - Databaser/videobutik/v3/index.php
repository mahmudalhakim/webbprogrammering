<?php
include ('header.php');
echo '<p><a href="admin/">Länk till admin</a></p>';
if(isset($_GET['msg'])){
  if($_GET['msg'] == 1) {
     echo "<div class='my-5 py-5 alert alert-success'>
        Tack för din beställning. Vi skickar filmen inom 24 timmar.
      </div>";
    }
    elseif($_GET['msg'] == 0){
      echo "<div class='my-5 py-5 alert alert-warning'>
       Vi hittar inte dig i vårt register!
     </div>";
    }
}
require('database.php');
$query = "SELECT * FROM Film";
$filmer = mysqli_query($connection,$query)
or die(mysqli_error($connection));	
echo "<div class='row'>";
while($row = $filmer->fetch_assoc()) : ?>
<div class="col-sm-4">
<div class="card m-1" style="">
  <img class="card-img-top" 
  src="images/<?php echo (empty($row['Bild']) ? 'no-poster.png' : $row['Bild'])?>" 
  alt="<?php echo $row['Titel'] ?>">
  <div class="card-body">
    <h4 class="card-title"><?php echo $row['Titel'] ?></h4>
    <p class="card-text">
    Huvudroll: <?php echo $row['Huvudroll'] ?><br>
    Kategori: <?php echo $row['Kategori'] ?>
    </p>
    <a href="buy.php?filmID=<?php echo $row['filmID'] ?>&Titel=<?php echo $row['Titel'] ?>" 
    class="btn btn-outline-info">Pris: <?php echo $row['Pris'] ?>:-</a>
  </div>
</div>
</div>
<?php endwhile; ?>
</div>
</body>
</html>