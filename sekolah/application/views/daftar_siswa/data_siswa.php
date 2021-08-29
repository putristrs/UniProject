<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Daftar Peserta Ekstrakurikuler</title>
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

   <link rel="stylesheet" href="<?php echo base_url('asset/admin/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css')?>">

  <!-- =======================================================
    Theme Name: Imperial
    Theme URL: https://bootstrapmade.com/imperial-free-onepage-bootstrap-theme/
    Author: BootstrapMade.com
    Author URL: https://bootstrapmade.com
  ======================================================= -->
</head>

<body>
  <header id="header">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="copyright">
            <h1>SMP Negeri 1 Banyubiru</h1>
          </div>
          <div class="credits">
            <!--
              All the links in the footer should remain intact.
              You can delete the links only if you purchased the pro version.
              Licensing information: https://bootstrapmade.com/license/
              Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Imperial
            -->
          </div>
        </div>
      </div>
    </div>
  </header>
  <div id="preloader"></div>

  <!--==========================
  Hero Section
  ============================-->
  <section id="container">
    <div class="container">
      <div class="wow fadeIn">
       <!--  <h1>SELAMAT DATANG DI WEBSITE</h1>
        <h2>Pendaftaran <span class="rotating"> Ekstrakurikuler</span><br> SMP <span class="rotating"> Negeri 1 Banyubiru</span></h2>
        <P></h2> -->
       
       <div class="box">
            <div class="box-header">
             <center><span style="font-size:30px;">Daftar Peserta Ekstrakurikuler SMP Negeri 1 Banyubiru</span></center>
             <center><span style="font-size:30px;">Tahun Ajaran 2019/2020</span></center>
             <center><span style="font-size:30px;">Kelas VII dan VIII</span></center>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <a href="<?php echo base_url().'siswa/index?>'; ?>" class="btn btn-primary" style="float:left">
                       <span></span> Home
                       </a>
                  </tr>
                  <br>
                <tr>
                  <th>Nis</th>
                  <th>Nama</th>
                  <th>Kelas</th>
                  <th>Agama</th>
                  <th>Jenis Kelamin</th>
                  <th>Ekstrakurikuler Wajib</th>
                  <th>Ekstrakurikuler Pilihan</th>
                  <th>Status</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                  <?php 
                  $no = 1;
                  foreach($tb_siswa as $row){ 
                ?>
                <tr>
                  <td><?php echo $row->nim ?></td>
                  <td><?php echo $row->nama_siswa ?></td>
                  <td><?php echo $row->nama_kelas ?></td>
                  <td><?php echo $row->agama ?></td>
                  <td><?php echo $row->jenis_kelamin ?></td>
                  <td><?php echo ($row->eks_wajib)?></td>
                  <td><?php echo $row->nama_ekstrakulikuler ?></td>
                  <td><?php echo ($row->status==0)?'belum disetujui':'disetujui'; ?></td>
                </tr> 
                <?php } ?>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
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

<script src="<?php echo base_url('asset/admin/bower_components/datatables.net/js/jquery.dataTables.min.js')?>"></script>
<script src="<?php echo base_url('asset/admin/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js')?>"></script>

<script>
  $(function () {
    $('#example1').DataTable()
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })
</script>
</body>

</html>
