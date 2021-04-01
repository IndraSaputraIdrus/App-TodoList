<?php

function ShowAllTodoList()
{
  $conn = koneksi();

  $query = 'SELECT * FROM tb_TodoList';
  $result = mysqli_query($conn, $query);
  $rows = [];
  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }
  return $rows;
}
