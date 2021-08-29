<?php

include_once '../database/koneksi.php';

$id = $_GET['id'];

$query = mysqli_query($koneksi, "DELETE FROM daftarkontak WHERE id=$id");
if ($query) {
  header('Location: ../home.php?page=daftarkontak');
}


 ?>
