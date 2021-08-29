<?php

include_once '../database/koneksi.php';


  $id         = $_POST['id'];
  $admin      = $_POST['admin'];
  $kpb        = $_POST['kpb'];
  $keterangan = $_POST['keterangan'];
  $biaya      = $_POST ['biaya'];
  $fasilitas  = $_POST ['fasilitas'];
  

    mysqli_query($koneksi, "UPDATE reminder SET reminder_id='$admin', kpb='$kpb', keterangan='$keterangan', biaya='$biaya', fasilitas='$fasilitas' WHERE id='$id'");
  
    header('Location: ../home.php?page=reminder');
  

 ?>
