<?=
include('header.php');
?>
<?php

if (isset($_GET['success'])) {
  $errorMessage = $_GET['success']; ?>

  <div class="alert alert-success"><?php echo $errorMessage ?></div>

<?php

}
?>

<div class="row mb-5">
  <div class="col-md-6 col-lg-4 mb-3">
    <div class="card">
      <div class="card-body">
        <h2 class="card-title" style="">Oromifa News</h2>

        <a href="newso.php" class="btn btn-primary">Go To News</a>
      </div>
    </div>
  </div>
  <div class="col-md-6 col-lg-4 mb-3">
    <div class="card">
      <div class="card-body">
        <h2 class="card-title" style="">Amharic News</h2>

        <a href="newsa.php" class="btn btn-primary">Go To News</a>
      </div>
    </div>
  </div>

</div>