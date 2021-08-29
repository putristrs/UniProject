<?php

include_once '../database/koneksi.php';


  $id         = $_POST['id'];
  $admin      = $_POST['admin'];
  $no_polisi           = $_POST['no_polisi'];
  $nama               = $_POST['nama'];
  $nomorhandphone     = $_POST['nomorhandphone'];
  $kontenpesan      = $_POST['kontenpesan'];
 
  

    mysqli_query($koneksi, "UPDATE pesanterkirim SET terkirim_id='$admin', no_polisi='$no_polisi', nama='$nama', nomorhandphone='$nomorhandphone', kontenpesan='$kontenpesan' WHERE id='$id'");
  
   header('Location: ../home.php?page=pesanterkirim');
  

 ?>
