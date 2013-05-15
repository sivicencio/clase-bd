<?php

require 'setup.php';
require 'model.php';

$precio = 0;
if ($_GET['precio']){
  $precio =$_GET['precio'];
}

$platos = getAllPlates($precio);


$smarty = new SmartyBD();

$smarty->assign('platos', $platos);
$smarty->display('platos.tpl');