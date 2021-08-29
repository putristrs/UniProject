<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Pendaftaran Ekstrakurikuler SMP Negeri 1 Banyubiru</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Facebook Opengraph integration: https://developers.facebook.com/docs/sharing/opengraph -->
  <meta property="og:title" content="">
  <meta property="og:image" content="">
  <meta property="og:url" content="">
  <meta property="og:site_name" content="">
  <meta property="og:description" content="">

  <!-- Twitter Cards integration: https://dev.twitter.com/cards/  -->
  <meta name="twitter:card" content="summary">
  <meta name="twitter:site" content="">
  <meta name="twitter:title" content="">
  <meta name="twitter:description" content="">
  <meta name="twitter:image" content="">

  <!-- Place your favicon.ico and apple-touch-icon.png in the template root directory -->
  <link rel="shortcut icon" href="<?php echo base_url('asset/siswa/favicon.ico');?>">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link rel="stylesheet" href="<?php echo base_url('asset/siswa/lib/bootstrap/css/bootstrap.min.css');?>"> 

  <!-- Libraries CSS Files -->
  <link rel="stylesheet" href="<?php echo base_url('asset/siswa/lib/font-awesome/css/font-awesome.min.css');?>">
  <link rel="stylesheet" href="<?php echo base_url('asset/siswa/lib/animate-css/animate.min.css')?>" >

  <!-- Main Stylesheet File -->
  <link rel="stylesheet" href="<?php echo base_url('asset/siswa/css/style.css');?>">

  <!-- =======================================================
    Theme Name: Imperial
    Theme URL: https://bootstrapmade.com/imperial-free-onepage-bootstrap-theme/
    Author: BootstrapMade.com
    Author URL: https://bootstrapmade.com
  ======================================================= -->
</head>

<body>
  <div id="preloader"></div>
<?php 
  date_default_timezone_set('Asia/Jakarta');

  $now = date("yy-m-d",strtotime("24-02-2020"));
  $start = date("yy-m-d",strtotime("24-02-2020"));
  $end = date("yy-m-d",strtotime("25-02-2020"));
  // if now = 22-01-2020 < start = 23-01-2020 && now = 22-01-2020 > end = 30-02-2020
?>
  <!--==========================
  Hero Section
  ============================-->
  <section id="hero">
    <div class="hero-container">
    <a style="top:0px; position:absolute;right:0px;width:100px;height:30px" href="<?=site_url('login/index')?>" class="btn-services">LOGIN</a>
  <!--   <div class="wow fadeIn">
         <div class="alert alert-warning" id="success-alert" style="float:center;height:200px;width:500px;top:0px; position:absolute;">
        <button type="button" class="close" data-dismiss="alert">x</button>
        <strong>Peringatan!</strong><br><br>
         <strong>Maaf! Pendaftaran Belum Dibuka</strong><br>
         Pendaftaran Dibuka Pada tanggal 24-02-2020 sampai 25-02-2020
        </div> -->
        <h1>SELAMAT DATANG DI WEBSITE</h1>
        <h2>Pendaftaran <span class="rotating"> Ekstrakurikuler</span><br> SMP <span class="rotating"> Negeri 1 Banyubiru</span></h2>
        <P></h2>
        <div class="actions">
          <a href="<?=site_url('siswa/view_formulir')?>" class="btn-services" 
            id ="active">Formulir Pendaftaran</a>
          <a href="<?=site_url('siswa/view_lihat_daftar_siswa')?>" class="btn-services">Lihat Daftar Siswa</a>
        </div>
      </div>
    </div>
  </section>


  <!--==========================
  Footer
============================-->
  <footer id="footer">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="copyright">
            &copy; Copyright <strong>Imperial Theme</strong>. All Rights Reserved
          </div>
          <div class="credits">
            <!--
              All the links in the footer should remain intact.
              You can delete the links only if you purchased the pro version.
              Licensing information: https://bootstrapmade.com/license/
              Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Imperial
            -->
            Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a><br>
            Modified by <a href="https://bootstrapmade.com/">SMP Negeri 1 Banyubiru</a>

          </div>
        </div>
      </div>
    </div>
  </footer>
  <!-- #footer -->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

  <!-- Required JavaScript Libraries -->
  <script src="<?php echo base_url('asset/siswa/lib/jquery/jquery.min.js')?>"></script>
  <script src="<?php echo base_url('asset/siswa/lib/bootstrap/js/bootstrap.min.js')?>"></script>
  <script src="<?php echo base_url('asset/siswa/lib/superfish/hoverIntent.js')?>"></script>
  <script src="<?php echo base_url('asset/siswa/lib/superfish/superfish.min.js')?>"></script>
  <script src="<?php echo base_url('asset/siswa/lib/morphext/morphext.min.js')?>"></script>
  <script src="<?php echo base_url('asset/siswa/lib/wow/wow.min.js')?>"></script>
  <script src="<?php echo base_url('asset/siswa/lib/stickyjs/sticky.js')?>"></script>
  <script src="<?php echo base_url('asset/siswa/lib/easing/easing.js')?>"></script>

  <!-- Template Specisifc Custom Javascript File -->
  <script src="<?php echo base_url('asset/siswa/js/custom.js')?>"></script>

  <script src="<?php echo base_url('asset/siswa/contactform/contactform.js')?>"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script type="text/javascript">
  $("#success-alert").fadeTo(5000, 3000).slideUp(500, function(){
    $("#success-alert").alert('close');
});

    // //Buat Off
    // if(<?= $now <= $start?>){
    //   $(document).ready(function(){
    //   $('#active').on('click',function(e) {
    //   e.preventDefault();
    //    });
    //  });
    // }

    //Buat On
      if(<?= $now < $start && $now > $end?>){
      $(document).ready(function(){
      $('#active').on('click',function(e) {
      e.preventDefault();
       });
     });
    }
</script>

</body>

</html>
