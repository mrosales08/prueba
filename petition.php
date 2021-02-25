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
      <h1 for="rol">Crear nueva PQR</h1>
      <br>
        <form action="saveP.php" method="POST">
          <div class="form-group">
            <select class="form-control" name="type" id="type"> 
            <option>Tipo </option>
            <option>Peticion</option>
            <option>queja</option>
            <option>reclamo</option>
            </select>
        </div>
        <br>
            <input type="text" name="affair" class="form-control" placeholder="Asunto" autofocus>
          <br>
          <div class="form-group">
          <select class="form-control" name="user" id="user">
          <?php
// Realizamos la consulta para extraer los datos
          $query = "SELECT * FROM user";
          $result = mysqli_query($conn, $query);
          ?>
        <?php  foreach ($result as $options); ?>
        <option value="<?php echo $options['iduser']?>"><?php echo  $options['iduser']?></option>

        </select>

        </div>
          <br>
          <div class="form-group">
            <select class="form-control" name="state" id="state"> 
            <option>Estado </option>
            <option>Nuevo</option>
            <option>En ejecucion</option>
            <option>Cerrado</option>
            </select>
        </div>
        <br>
         
        <div class="form-group">
            <input type="date" name="create_ad" rows="2" class="form-control" placeholder="Fecha de creacion">
          </div>
          <br>
          <div class="form-group">
          <input type="date" name="final_date" class="form-control" id="final_date" placeholder="Fecha limite">
          </div>
          <br>
          <input type="submit" name="saveP" class="abs-center , btn btn-success btn-block" value="Guardar">
        </form>
      </div>
    </div>
    <div class="col-md-8">
      <table class="table table-bordered">
        <thead>
          <tr>
            <th>Tipo</th>
            <th>Asunto</th>
            <th>Id Usuario</th>
            <th>Estado</th>
            <th></th>
          </tr>
        </thead>
        <tbody>

          <?php
          $query = "SELECT * FROM pqr";
          $result = mysqli_query($conn, $query);    

          while($row = mysqli_fetch_assoc($result)) { ?>
          <tr>
            <td><?php echo $row['type']; ?></td>
            <td><?php echo $row['affair']; ?></td>
            <td><?php echo $row['user']; ?></td>
            <td><?php echo $row['state']; ?></td>
            <td>
              <a href="editP.php?idPQR=<?php echo $row['idPQR']?>" class="btn btn-secondary">
                <i class="fas fa-marker"></i>
              </a>
              <a href="deleteP.php?idPQR=<?php echo $row['idPQR']?>" class="btn btn-danger">
                <i class="far fa-trash-alt"></i>
              </a>
            </td>
          </tr>
          <?php } ?>
        </tbody>
      </table>
    </div>
  </div>
</main>
            

<?php include("includes/footer.php")?>