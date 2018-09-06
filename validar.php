<?php
  $correo = $_POST['correo'];
  $pass = $_POST['pass'];

  $con = new mysqli('localhost', 'root', '', 'cable_unet');

  $rs = mysqli_query($con, "SELECT * FROM usuario WHERE email = '$correo' AND password = $pass");
  if (!$rs ) {
    @session_start();
    $_SESSION["usuario"]=$row["nombre"];
    header("Location: index.php");
  }else {
    header("Location: login.php");
  }
?>
