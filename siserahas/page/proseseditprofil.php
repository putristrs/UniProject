<?php

include_once '../database/koneksi.php';


  $id            = $_POST['id'];
  $username      = $_POST['username'];
  $password      = $_POST['password'];
  $nomorhandphone      = $_POST['nomorhandphone'];
  
  

    mysqli_query($koneksi, "UPDATE user SET id='$id', username='$username', password='$password', nomorhandphone='$nomorhandphone'");
  
    header('Location: ../home.php?page=profil');
  

 ?>
