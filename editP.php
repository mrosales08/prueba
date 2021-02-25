<?php
include("db.php");
$title = '';
$description= '';

if  (isset($_GET['idPQR'])) {
  $id = $_GET['idPQR'];
  $query = "SELECT * FROM pqr WHERE idPQR=$id";
  $result = mysqli_query($conn, $query);
  if (mysqli_num_rows($result) == 1) {
    $row = mysqli_fetch_array($result);
    $type = $row['type'];
    $affair = $row['affair'];
    $user = $row['user'];
    $state = $row['state'];
    $create_ad = $row['create_ad'];
    $final_date = $row['final_date'];
  }
}

if (isset($_POST['updateP'])) {
    $type = $_POST['type'];
    $affair = $_POST['affair'];
    $user = $_POST['user'];
    $state = $_POST['state'];
    $create_ad = $_POST['create_ad'];
    $final_date = $_POST['final_date'];

  $query = "UPDATE pqr set type = '$type', affair = '$affair', user = '$user', state = '$state', create_ad = '$create_ad', final_date='$final_date' WHERE idPQR=$id";
  mysqli_query($conn, $query);
  $_SESSION['message'] = 'Actualizado con exito!';
  $_SESSION['message_type'] = 'warning';
  header('Location: petition.php');
}

?>
<?php include('includes/header.php'); ?>
<div class="container p-4">
  <div class="row">
    <div class="col-md-4 mx-auto">
      <div class="card card-body">
      <form action="editP.php?idPQR=<?php echo $_GET['idPQR']; ?>" method="POST">
        <div class="form-group">
          <input name="type" type="text" class="form-control" value="<?php echo $type; ?>" placeholder="Tipo de PQR">
        </div>
        <div class="form-group">
          <input name="affair" type="text" class="form-control" value="<?php echo $affair; ?>" placeholder="Asunto">
        </div>
        <div class="form-group">
          <input name="user" type="text" class="form-control" value="<?php echo $user; ?>" placeholder="user">
        </div>
        <div class="form-group">
          <input name="state" type="text" class="form-control" value="<?php echo $state; ?>" placeholder="state">
        </div>
        <div class="form-group">
          <input name="create_ad" type="text" class="form-control" value="<?php echo $create_ad; ?>" placeholder="create_ad">
        </div>
        <div class="form-group">
          <input name="final_date" type="text" class="form-control" value="<?php echo $final_date; ?>" placeholder="final_date">
        </div>
        <button class="btn-success" name="updateP">
          Update
</button>
      </form>
      </div>
    </div>
  </div>
</div>
<?php include('includes/footer.php'); ?>
