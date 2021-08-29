<?php

include_once '../database/koneksi.php';



  $admin      = $_POST['admin'];
  $no_polisi  = $_POST['no_polisi'];
  $nama       = $_POST['nama'];
  $nomorhandphone = $_POST['nomorhandphone'];
  $kontenpesan    = $_POST['kontenpesan'];
  $status         = $_POST['status'];
  
  //rename foto
   mysqli_query($koneksi, "INSERT INTO pesankeluar(keluar_id, no_polisi, nama, nomorhandphone, kontenpesan, status) VALUES('$admin', '$no_polisi', '$nama', '$nomorhandphone', '$kontenpesan', '$status')");
    
      header('Location: ../home.php?page=pesankeluar');
   


 ?>
