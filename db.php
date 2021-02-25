<?php
if(!isset($_SESSION)) 
{ 
    session_start(); 
} 

$conn = mysqli_connect(
  'localhost',
  'root',
  '',
  'prueba'
) or die(mysqli_erro($mysqli));

/*  if(isset($conn)){
    echo 'db is connect';
}  */


?>
