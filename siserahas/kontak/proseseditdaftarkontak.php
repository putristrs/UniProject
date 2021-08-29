<?php

include_once '../database/koneksi.php';


  $id         = $_POST['id'];
  $admin      = $_POST['admin'];
  $nopolisi           = $_POST['nopolisi'];
  $nama               = $_POST['nama'];
  $nomorhandphone     = $_POST['nomorhandphone'];
  

    mysqli_query($koneksi, "UPDATE daftarkontak SET polisi_id='$admin', nopolisi='$nopolisi', nama='$nama', nomorhandphone='$nomorhandphone' WHERE id='$id'");
  
   header('Location: ../home.php?page=daftarkontak');
  

 ?>
