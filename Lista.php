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

      
      <table class="table table-bordered">
        <thead>
          <tr>
            <th>Nombre</th>
            <th>Documento</th>
            <th>Telefono</th>
            <th>Rol</th>
            <th>Nombre de usuario</th>
            <th>Accion</th>
          </tr>
        </thead>
        <tbody>

          <?php
        if(!isset($_SESSION)) 
        { 
            session_start(); 
        } 
          $idUsuario = $_SESSION['username'];

          $query = "SELECT * FROM user";
          $result_tasks = mysqli_query($conn, $query);    

          while($row = mysqli_fetch_assoc($result_tasks)) { ?>
          <tr>
            <td><?php echo $row['name']; ?></td>
            <td><?php echo $row['document']; ?></td>
            <td><?php echo $row['phone']; ?></td>
            <td><?php echo $row['rol']; ?></td>
            <td><?php echo $row['username']; ?></td>
            <td>
              <a href="edit.php?iduser=<?php echo $row['iduser']?>" class="btn btn-secondary">
                <i class="fas fa-marker"></i>
              </a>
              <a href="delete.php?iduser=<?php echo $row['iduser']?>" class="btn btn-danger">
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