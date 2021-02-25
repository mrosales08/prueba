<?php include("db.php")?>
<?php include("includes/header.php")?>

  
<main class="container p-4">
  <div class="row">
      <!-- MESSAGES -->

      <?php if (isset($_SESSION['message'])) { ?>
      <div class="alert alert-<?= $_SESSION['message_type']?> alert-dismissible fade show" role="alert">
        <?= $_SESSION['message']?>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <?php session_unset(); } ?>

      <!-- add form -->
      <div class="text-center , card card-body">
      <h1 for="rol">BIENVENIDO</h1>
        <a href="listP.php" class="btn btn-secondary">Consultar quejas</a>
        <br>
        <a href="petition.php" class="btn btn-secondary">Presentar nueva PQR</a>
        <br>
        <a href="lista.php" class="btn btn-secondary">Usuarios</a>
      </div>
    </div>
  </div>
</main>
            

<?php include("includes/footer.php")?>