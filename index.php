<?php include("db.php")?>
<?php include("includes/header.php")?>
<main class="container p-4">
  <div class="row">
    <div class="text-center col-md-8">
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
      <h1 for="rol">Registrarse</h1>
        <form action="save.php" method="POST">
          <div class="form-group">
            <input type="text" name="name" class="form-control" placeholder="Nombre" autofocus>
          </div>
          <br>
          <div class="form-group">
            <input name="document" rows="2" class="form-control" placeholder="Documento">
          </div>
          <br>
          <div class="form-group">
            <input name="phone" rows="2" class="form-control" placeholder="Telefono">
          </div>
          <br>
          <div class="form-group">
            <select class="form-control" name="rol" id="rol">
            <option>Administrados</option>
            <option>Usuario</option>
            </select>
        </div>
        <br>
        <div class="form-group">
            <input name="username" rows="2" class="form-control" placeholder="Nombre de usuario">
          </div>
          <br>
          <div class="form-group">
          <input type="password" class="form-control" id="password" placeholder="Password">
          </div>
          <br>
          <input type="submit" name="save" class="abs-center , btn btn-success btn-block" value="Guardar">
        </form>
      </div>
    </div>
  </div>
</main>
            

<?php include("includes/footer.php")?>