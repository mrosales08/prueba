<?php

include("db.php");

if(isset($_GET['idPQR'])) {
  $id = $_GET['idPQR'];
  $query = "DELETE FROM pqr WHERE idPQR = $id";
  $result = mysqli_query($conn, $query);
  if(!$result) {
    die("Query Failed.");
  }

  $_SESSION['message'] = '¡Eliminado con exito!';
  $_SESSION['message_type'] = 'Error al eliminar';
  header('Location: petition.php');
}

?>
