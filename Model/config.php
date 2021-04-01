<?php

function koneksi()
{
  $db_server = 'localhost';
  $db_user = 'root';
  $db_pass = '';
  $db_name = 'TodoList';

  $conn = mysqli_connect($db_server, $db_user, $db_pass, $db_name);
  if (!$conn) {
    echo 'Koneksi gagal';
  }

  return $conn;
}
