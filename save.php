<?php

include('db.php');

if (isset($_POST['save'])) {
  $name = $_POST['name'];
  $document = $_POST['document'];
  $phone = $_POST['phone'];
  $rol = $_POST['rol'];
  $username = $_POST['username'];
  $password = $_POST['password'];

  $query = "INSERT INTO user (name, document, phone, rol, username, password) VALUES ('$name', '$document','$phone','$rol','$username','$password')";
  $result = mysqli_query($conn, $query);
  if(!$result) {
    die("Query Failed.");
  }

  $_SESSION['message'] = 'Guardado con exito!';
  $_SESSION['message_type'] = 'Fallo!';
  header('Location: index.php');

}

?>