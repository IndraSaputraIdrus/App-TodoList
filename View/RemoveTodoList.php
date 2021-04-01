<?php

require_once __DIR__ .  '/../Model/config.php';

if (isset($_POST['del'])) {
  $conn = koneksi();

  if (isset($_POST['cek'])) {
    $cek = $_POST['cek'];

    for ($i = 0; $i < count($cek); $i++) {
      $del = $cek[$i];

      $sql = "DELETE FROM tb_TodoList WHERE id = '$del'";
      $result = mysqli_query($conn, $sql);
    }

    if ($result) {
      echo "
    <script>
      alert('Sukses');
      document.location.href = 'ViewAllTodoList.php';
    </script>    
    ";
    }
  } else {
    echo "
    <script>
      alert('Ceklist data yang ingin dihapus');
      document.location.href = 'ViewAllTodoList.php';
    </script>    
    ";
  }
}
