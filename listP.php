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
            <th>Tipo</th>
            <th>Asunto</th>
            <th>Id Usuario</th>
            <th>Estado</th>
            <th>Accion</th>
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