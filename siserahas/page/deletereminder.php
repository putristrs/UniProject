<?php

include_once '../database/koneksi.php';

$id = $_GET['id'];

$query = mysqli_query($koneksi, "DELETE FROM reminder WHERE id=$id");
if ($query) {
  header('Location: ../home.php?page=reminder');
}


 ?>
