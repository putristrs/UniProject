<?php

include_once '../database/koneksi.php';


  $admin  		= $_POST['admin'];
  $kpb          = $_POST['kpb'];
  $keterangan   = $_POST['keterangan'];
  $biaya        = $_POST['biaya'];
  $fasilitas    = $_POST['fasilitas'];
  
  
      mysqli_query($koneksi, "INSERT INTO reminder(reminder_id, kpb, keterangan, biaya, fasilitas) VALUES('$admin', '$kpb', '$keterangan', '$biaya', '$fasilitas')");
    
      header('Location: ../home.php?page=reminder');
   


 ?>
