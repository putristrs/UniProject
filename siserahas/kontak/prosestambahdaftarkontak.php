<?php

include_once '../database/koneksi.php';

  $admin              = $_POST['admin'];
  $nopolisi           = $_POST['nopolisi'];
  $nama               = $_POST['nama'];
  $nomorhandphone     = $_POST['nomorhandphone'];
  
  //rename foto
   mysqli_query($koneksi, "INSERT INTO daftarkontak(polisi_id, nopolisi, nama, nomorhandphone) VALUES('$admin','$nopolisi', '$nama', '$nomorhandphone')");
    
      header('Location: ../home.php?page=daftarkontak');
   


 ?>
