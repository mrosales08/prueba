<?php
include('db.php');
$username=$_POST['username'];
$password=$_POST['password'];
if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
$_SESSION['username']=$username;



$conexion=mysqli_connect("localhost","root","","prueba");

$query="SELECT*FROM user where username='$username' and password='$password'";
$resultado=mysqli_query($conn,$query);

$filas=mysqli_num_rows($resultado);

if($filas){
  
    header("location:home.php");

}else{
    ?>
    <?php
    include("login.php");

  ?>
  <h1 class="bad">¡Error de autenticacion!</h1>
  <?php
}
mysqli_free_result($resultado);
mysqli_close($conn);