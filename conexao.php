<?php 
  $host = 'localhost';
  $user = 'root';
  $pass = '';
  $db = 'crudphp';

  $mysqli = mysqli_connect($host, $user, $pass, $db);
    if ($mysqli) {
      echo 'Conectado ao DB.';
    }else{
      echo 'Falha ao conectar ao DB.';
    }
?>