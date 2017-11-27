<!-- Inkludera sidhuvud -->
<?php include 'header.php'; ?>

<form action="insert.php" method="post">

  <div class="row">
    
    <div class="form-group col-md-5">
      <input type="text" name="namn" required
           class="form-control"
           placeholder="Ange ett namn">
    </div>

    <div class="form-group col-md-5">
      <input type="tel" name="telefon" required
           class="form-control" 
           placeholder="Ange telefon/mobil">
    </div>

    <div class="form-group col-md-2">
      <input type="submit" value="Lägg till"
             class="btn btn-block btn-outline-primary">
    </div>
  </div>
</form>

<!-- Hämta data från databasen -->
<?php include 'select.php'; ?>

<!-- Inkludera sidfoten -->
<?php include 'footer.php'; ?>