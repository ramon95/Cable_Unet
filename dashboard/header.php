<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/Cable_Unet' . '/config/config.php';
spl_autoload_register(function ($class) {
  include "../../class/$class/$class.class.php";
});

$session = new Session();
if (! $session->validateSession('id')) {
  header('location: login/login.php?message=Debes iniciar sesión&type=warningMessage');
}
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="icon" type="image/png" href="../../assets/img/unet.ico">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>Cable Unet</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />
    <!-- Bootstrap core CSS     -->
    <link href="../../assets/css/bootstrap.min.css" rel="stylesheet" />
    <!-- Animation library for notifications   -->
    <link href="../../assets/css/animate.min.css" rel="stylesheet"/>
    <!--  Light Bootstrap Table core CSS    -->
    <link href="../../assets/css/light-bootstrap-dashboard.css" rel="stylesheet"/>
    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="../../assets/css/demo.css" rel="stylesheet" />
    <link href="../../assets/css/pe-icon-7-stroke.css" rel="stylesheet" />
    <!-- css de select 2 -->
    <link rel="stylesheet" href="../../assets/css/select2.min.css">
</head>
<body>
  <div class="wrapper">
