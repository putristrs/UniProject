<?php

include_once '../database/koneksi.php';

$id = $_GET['id'];

$query = mysqli_query($koneksi, "DELETE FROM antrian WHERE id=$id");
if ($query) {
  header('Location: ../home.php?page=antrian');
}


 ?>
