<?php

function open_database_connection() {
  return new PDO("pgsql:dbname=clases_bd;host=localhost","sivicencio","");
}

function close_database_connection($connection) {
  $connection = null;
}

function getAllPlates($price = 0) {
  $dbcon = open_database_connection();
  $sql= "SELECT * FROM plates WHERE price > '$price';";

  $platos = array();
  foreach ($dbcon->query($sql) as $row) {
    $platos[] = $row;
  }
  close_database_connection($dbcon);
  return $platos;
}

function getAllChefs() {
  $dbcon = open_database_connection();
  $sql= "SELECT * FROM chefs;";

  $chefs = array();
  foreach ($dbcon->query($sql) as $row) {
    $chefs[] = $row;
  }
  close_database_connection($dbcon);
  return $chefs;
}

function insertReservation($data) {
  $res = '';
  $dbcon = open_database_connection();
  $sql ="INSERT INTO reservations (rdate,client_rut,table_tnumber) VALUES ('$data[fecha]','$data[rut]','$data[tab]');";
  try {
    if($dbcon->exec($sql)) {
     $res = "Reserva exitosa";
    }
    else {
     $res = "Reserva Fallida";
    }
  }
  catch(PDOException $e){
        
  }

  if (!$_POST['rut'] ) {
     $res ="Falta RUT";
  }
  if (!$_POST['fecha']) {
      $res ="Falta fecha";
  }
  if (!$_POST['tab'] ) {
     $res ="Falta mesa";
  }
  close_database_connection($dbcon);
  return $res;
}