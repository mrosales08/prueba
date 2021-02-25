<?php
include("db.php");
$title = '';
$description= '';

if  (isset($_GET['iduser'])) {
  $id = $_GET['iduser'];
  $query = "SELECT * FROM user WHERE iduser=$id";
  $result = mysqli_query($conn, $query);
  if (mysqli_num_rows($result) == 1) {
    $row = mysqli_fetch_array($result);
    $name = $row['name'];
    $document = $row['document'];
    $phone = $row['phone'];
    $rol = $row['rol'];
    $username = $row['username'];
    $password = $row['password'];
  }
}

if (isset($_POST['update'])) {
  $id = $_GET['iduser'];
  $name = $_POST['name'];
  $document = $_POST['document'];
  $phone = $_POST['phone'];
  $rol = $_POST['rol'];
  $username = $_POST['username'];
  $password = $_POST['password'];

  $query = "UPDATE user set name = '$name', document = '$document', phone = '$phone', rol = '$rol', username = '$username', password = '$password'  WHERE iduser=$id";
  mysqli_query($conn, $query);
  $_SESSION['message'] = 'Actualizado con exito!';
  $_SESSION['message_type'] = 'warning';
  header('Location: index.php');
}

?>
<?php include('includes/header.php'); ?>
<div class="container p-4">
  <div class="row">
    <div class="col-md-4 mx-auto">
      <div class="card card-body">
      <form action="edit.php?iduser=<?php echo $_GET['iduser']; ?>" method="POST">
        <div class="form-group">
          <input name="name" type="text" class="form-control" value="<?php echo $name; ?>" placeholder="Nombre">
        </div>
        <div class="form-group">
          <input name="document" type="text" class="form-control" value="<?php echo $document; ?>" placeholder="Documento">
        </div>
        <div class="form-group">
          <input name="phone" type="text" class="form-control" value="<?php echo $phone; ?>" placeholder="Telefono">
        </div>
        <div class="form-group">
          <input name="username" type="text" class="form-control" value="<?php echo $username; ?>" placeholder="username">
        </div>
        <div class="form-group">
          <input name="password" type="text" class="form-control" value="<?php echo $password; ?>" placeholder="password">
        </div>
        <button class="btn-success" name="update">
          Update
</button>
      </form>
      </div>
    </div>
  </div>
</div>
<?php include('includes/footer.php'); ?>
