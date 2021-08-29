<?php

include_once '../database/koneksi.php';


  $id         = $_POST['id'];
  $admin      = $_POST['admin'];
  $status     = $_POST['status'];
  $no_polisi  = $_POST['no_polisi'];
  $pemilik    = $_POST['pemilik'];
  $pkb        = $_POST['pkb'];
  $keluhan    = $_POST['keluhan'];
  $mulai      =$_POST['mulai'];
  $mekanik    =$_POST['mekanik'];
  $bayar       =$_POST['bayar'];
  

    mysqli_query($koneksi, "UPDATE antrian SET antrian_id='$admin', status='$status', no_polisi='$no_polisi', pemilik='$pemilik', pkb='$pkb', keluhan='$keluhan', mulai='$mulai', mekanik='$mekanik', bayar='$bayar' WHERE id='$id'");
  
    header('Location: ../home.php?page=antrian');
  

 ?>
