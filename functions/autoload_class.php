<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/Cable_Unet/config/config.php';
spl_autoload_register(function ($class) {
  if(in_array($class, NORMAL_CLASS))
    return require DIR . "/Cable_Unet/class/$class/$class.class.php";
  elseif (strpos($class, 'Message') !== false)
    require DIR . "/Cable_Unet/class/Message/$class.class.php";
  else
    require DIR . "/Cable_Unet/class/Article/$class.class.php";
});
