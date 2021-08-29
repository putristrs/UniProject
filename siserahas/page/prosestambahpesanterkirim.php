<?php

include_once '../database/koneksi.php';



  $admin      = $_POST['admin'];
  $no_polisi  = $_POST['no_polisi'];
  $nama       = $_POST['nama'];
  $nomorhandphone = $_POST['nomorhandphone'];
  $kontenpesan    = $_POST['kontenpesan'];
 
  
  //rename foto
   mysqli_query($koneksi, "INSERT INTO pesanterkirim(terkirim_id, no_polisi, nama, nomorhandphone, kontenpesan) VALUES('$admin', '$no_polisi', '$nama', '$nomorhandphone', '$kontenpesan')");
    
      header('Location: ../home.php?page=pesanterkirim');
   


 ?>
