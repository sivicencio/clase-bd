<?php
define('SMARTY_DIR', '/Users/sivicencio/Documents/Server/clase_bd/includes/Smarty-3.1.13/libs/');

require_once(SMARTY_DIR . 'Smarty.class.php');

class SmartyBD extends Smarty {
  function __construct() {
    parent::__construct();

    $this->assign('app_name', 'BD Restaurant');
  }
}