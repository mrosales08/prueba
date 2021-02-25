<?php include("db.php")?>
<?php include("includes/header.php")?>

  
<main class="container p-4">
  <div class="row">
    <div class="col-md-4">
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
      <div class="card card-body">
      <h1 for="rol">Iniciar Sesion</h1>
        <form action="validar.php" method="POST">
          <div class="form-group">
            <input type="text" name="username" class="form-control" placeholder="Usuario" autofocus>
          </div>
          <br>
          <div class="form-group">
          <input type="password" class="form-control" name="password" id="password" placeholder="Password">
          </div>
          <br>
          <input type="submit" name="save" class="abs-center , btn btn-success btn-block" value="Ingresar">
        </form>
        <a href="index.php" class="btn btn-secondary">Registrarse</a>
      </div>
    </div>
    
    </div>
  </div>
</main>
            

<?php include("includes/footer.php")?>