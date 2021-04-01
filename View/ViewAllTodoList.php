<?php

require_once __DIR__ . '/../Function/ShowAllTodoList.php';
require_once __DIR__ . '/../Model/config.php';

$conn = koneksi();
$rows = ShowAllTodoList();
$no = 1;

if (isset($_POST['add'])) {
  header("Location: AddTodoList.php");
  exit;
}



?>

<form action="RemoveTodoList.php" method="POST">
  <table border="1" cellspacing="0" cellpadding="10">

    <tr>
      <th>#</th>
      <th>No</th>
      <th>Todo List</th>
    </tr>

    <?php foreach ($rows as $row) : ?>
      <tr>
        <td><input type="checkbox" name="cek[]" id="cek" value="<?= $row['id']; ?>"></td>
        <td><?= $no++; ?></td>
        <td><?= $row['todo_list']; ?></td>
      </tr>
    <?php endforeach; ?>



  </table>
  <br>




  <button type="submit" name="del">Delete</button>

</form>
<form action="" method="post">
  <button type="submit" name="add">Add</button>
</form>