<?php

include('db.php');

if (isset($_POST['saveP'])) {
  $type = $_POST['type'];
  $affair = $_POST['affair'];
  $user = $_POST['user'];
  $state = $_POST['state'];
  $create_ad = $_POST['create_ad'];
  $final_date = $_POST['final_date'];

  $query = "INSERT INTO pqr (type, affair, user, state, create_ad, final_date) VALUES ('$type', '$affair','$user','$state','$create_ad','$final_date')";
  $result = mysqli_query($conn, $query);
  if(!$result) {
    die("Query Failed.");
  }

  $_SESSION['message'] = 'Guardado con exito!';
  $_SESSION['message_type'] = 'Fallo!';
  header('Location: petition.php');

}

?>