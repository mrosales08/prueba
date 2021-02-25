<?php

include("db.php");

if(isset($_GET['iduser'])) {
  $id = $_GET['iduser'];
  $query = "DELETE FROM user WHERE iduser = $id";
  $result = mysqli_query($conn, $query);
  if(!$result) {
    die("Query Failed.");
  }

  $_SESSION['message'] = '¡Eliminado con exito!';
  $_SESSION['message_type'] = 'Error al eliminar';
  header('Location: index.php');
}

?>
