<?php

require_once __DIR__ .  '/../Model/config.php';

$conn = koneksi();

if (isset($_POST['submit'])) {
  $todo_list = $_POST['todolist'];

  $query = "INSERT INTO tb_TodoList (todo_list) VALUES ('$todo_list')";
  $result = mysqli_query($conn, $query);

  if (mysqli_affected_rows($conn) > 0) {
    echo '<p style="color: red; font-style: italic;">Berhasil</p>';
  } else {
    echo '<p style="color: red; font-style: italic;">Gagal</p>';
  }
}

?>
<form action="" method="POST">

  <label for="todolist">

    Todo List

    <input type="text" name="todolist" id="todolist" autocomplete="off" autofocus>

  </label>

  <button type="submit" name="submit">tambah</button>

  <a href="ViewAllTodoList.php">Kembali</a>
</form>