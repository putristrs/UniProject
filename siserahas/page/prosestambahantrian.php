<?php

include_once '../database/koneksi.php';



  $admin      = $_POST['admin'];
  $status     = $_POST['status'];
  $no_polisi  = $_POST['no_polisi'];
  $pemilik    = $_POST['pemilik'];
  $pkb        = $_POST['pkb'];
  $keluhan      = $_POST['keluhan'];
  $mulai        =$_POST['mulai'];
  $mekanik      =$_POST['mekanik'];
  $bayar        =$_POST['bayar'];
  
  //rename foto
   mysqli_query($koneksi, "INSERT INTO antrian(antrian_id, status, no_polisi, pemilik, pkb, keluhan, mulai, mekanik, bayar) VALUES('$admin','$status','$no_polisi','$pemilik','$pkb','$keluhan','$mulai', '$mekanik', '$bayar')");
    
      header('Location: ../home.php?page=antrian');
   


 ?>
