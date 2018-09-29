<?php
if (!isset($_POST['submit'])){
  header('location: login.php');
  exit();
}

require '../../functions/autoload_class.php';

$email = $_POST['email'] ?? '';
$password = $_POST['password'] ?? '';
if (empty($email) or empty($password)) {
  header('location: login.php?message=Usuario o contraseña no introducidos');
}

$login = new Login(new Conexion);
$login->setEmail($email);
$login->setPassword($password);
$row = $login->signIn();
if ($row){
  $session = new Session();
  //primero el nombre de la variable que uso y luego el nombre de la BD
  $session->addValue('email', $row['email']);
  $session->addValue('id', $row['id']);
  $session->addValue('nombre', $row['nombre']);
  $session->addValue('apellido', $row['apellido']);
  header('location: ../dashboard.php');
} else {
  header('location: login.php?message=Usuario o contraseña incorrectos&type=warningMessage');
}
