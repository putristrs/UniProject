<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Formulir Pendaftaran Ekstrakurikuler</title>
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
  <link href="https://cdn.jsdelivr.net/npm/select2@4.0.12/dist/css/select2.min.css" rel="stylesheet" />
  <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet"/>

  <!-- =======================================================
    Theme Name: Imperial
    Theme URL: https://bootstrapmade.com/imperial-free-onepage-bootstrap-theme/
    Author: BootstrapMade.com
    Author URL: https://bootstrapmade.com
  ======================================================= -->
</head>
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
<body>
  <div id="preloader"></div>

  <!--==========================
  Hero Section
  ============================-->
  <section id="container">
    <div class="container">
      <div class="modal-content">
                      <!-- heading modal -->
                      <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                      <center><h4 class="modal-title">Formulir Pendaftaran Ekstrakurikuler</h4></center>
                      </div>
                      <!-- body modal -->
                      <div class="modal-body">
                      <form role="form" action="<?php echo base_url()."siswa/insert_formulir"; ?>" method="POST">
                      <div class="box-body">
                        <div class="form-group">
                          <input type="hidden" class="form-control" value="" name="id" id="id">

                        <label for="exampleInputEmail1">Masukkan Nis:</label>
                           <?= form_dropdown('siswa', getDropdownList('tb_siswa',['id','nim'],'Nis'),'', ['class' => 'select2','style' => 'width: 100%', 'id' => 'siswa']) ?> <span style='color:red;font-size:10px;'>*Cari Nis Terlebih Dahulu</span>
                        </div>
                        <div class="form-group">
                          
                          <label for="exampleInputEmail1">NIS</label>
                          <input type="number" class="form-control"  name="nim" id="nim" placeholder="Masukan NIS" required>
                        </div>
                        <div class="form-group">
                          <label for="exampleInputPassword1">Nama</label>
                          <input type="text" class="form-control"  name="nama_siswa" id="nama_siswa" placeholder="Masukan Nama" required>
                        </div>
                         <div class="form-group">
                          <label for="exampleInputPassword1">Kelas</label>
                            <select id="kelas" name="kelas" class="form-control">
                            <option value="">-- Pilih Kelas --</option>
                            <option value="<?= $list_kelas["0"]["id"]; ?>">VII A</option>
                            <option value="<?= $list_kelas["1"]["id"]; ?>">VII B</option>
                            <option value="<?= $list_kelas["2"]["id"]; ?>">VII C</option>
                            <option value="<?= $list_kelas["3"]["id"]; ?>">VII D</option>
                            <option value="<?= $list_kelas["4"]["id"]; ?>">VII E</option>
                            <option value="<?= $list_kelas["5"]["id"]; ?>">VII F</option>
                            <option value="<?= $list_kelas["6"]["id"]; ?>">VIII A</option>
                            <option value="<?= $list_kelas["7"]["id"]; ?>">VIII B</option>
                            <option value="<?= $list_kelas["8"]["id"]; ?>">VIII C</option>
                            <option value="<?= $list_kelas["9"]["id"]; ?>">VIII D</option>
                            <option value="<?= $list_kelas["10"]["id"]; ?>">VIII E</option>
                            <option value="<?= $list_kelas["11"]["id"]; ?>">VIII F</option>
                          </select>
                        </div>
                         <div class="form-group">
                          <label for="exampleInputPassword1">Agama</label>
                          <input type="text" class="form-control"  name="agama" id="agama" placeholder="Masukan Agama" required>
                        </div>
                         <div class="form-group">
                          <label for="jenis_kelamin">Jenis Kelamin</label>
                          <br>
                          <label><input type="radio" name="jenis_kelamin" id="jenis_kelamin" value="L"> Lelaki</label>
                          <label><input type="radio" name="jenis_kelamin" id="jenis_kelamin" value="P"> Perempuan</label>

                        </div>
                        <div class="form-group">
                          <label for="exampleInputPassword1">Ekstrakurikuler Wajib</label>
                          <input type="text" class="form-control"  name="eks_wajib" id="eks_wajib" placeholder="Masukan Ekstrakurikuler Wajib"><span style='color:red;font-size:11px;'>* Khusus untuk kelas 7</span>
                        </div>
                             <div class="form-group">
                          <label for="exampleInputPassword1">Ekstrakurikuler Pilihan</label>
                         <?= form_dropdown('pilihan_eks', getDropdownList('tb_ekstrakulikuler',['id','nama_ekstrakulikuler'],'Ekstrakurikuler'),'', ['class' => 'select2','style' => 'width: 100%', 'id' => 'pilihan_eks']) ?>
                        </div>
                         <div class="box-footer">
                           <button type="submit" class="btn btn-primary" style="float:left">Simpan</button>
                           <a href="<?php echo base_url().'admin/cetakformulir?>'; ?>" class="btn btn-default btn-sm">
                       <span class="glyphicon glyphicon-print"></span> Cetak 
                       </a>
                       <a href="<?php echo base_url().'siswa/index?>'; ?>" class="btn btn-primary" style="float:right">
                       <span></span> Home
                       </a>
                       <br>
                       <br>
                          <span style='color:red;font-size:14px;'>*Catatan</span>
                          <br>
                          <span style='color:red;font-size:10px;'>Setelah daftar, formulir disimpan terlebih dahulu kemudian dicetak</span>
                           
                        </div>
                      </form>
                      </div>
                    </div>
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
  <script src="https://cdn.jsdelivr.net/npm/select2@4.0.12/dist/js/select2.min.js"></script>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>


</body>

<script type="text/javascript">
  $(document).ready(function() {
    // $('#siswa').select2({
    //   ajax: {url: "<?= base_url();?>/Siswa/Getdatasiswa",
    //           dataType: "json",
    //           delay: 250,
    //           data: function(params){
    //             return{
    //               siswa: params.term
    //             };
    //           },
    //           processResult: function(data){
    //             var results = [];
    //             $.each(data, function (index, item){
    //               results.push({
    //                 id: item.id,
    //                 text: item.nim
    //               });
    //             });
    //             return{
    //               results: results
    //             };
    //           }
    //         }
    // });
    $('.select2').select2({
    });

    $('#siswa').change(function() {

    //nilai PPIC Jobs
    var id = $(this).val();
    console.log(id)
    // $.get( "<?= base_url();?>/Siswa/Getdatasiswa/"+id, function( data ) {
    //   console.log(data)
    //    $('#nim').val(data.nim);
    // });

    $.ajax({
    type: 'GET',
    dataType: 'json',
    url: "<?= base_url();?>/Siswa/Getdatasiswa/"+id,
    success: function(response){
      console.log(response);
      let jk = response.pilihan_eks.jenis_kelamin;
      $('#id').val(id);
      $('#nim').val(response.pilihan_eks.nim);
      $('#nama_siswa').val(response.pilihan_eks.nama_siswa);
      $('#kelas').val(response.pilihan_eks.id_kelas);
      $('#agama').val(response.pilihan_eks.agama);
      // $('#jenis_kelamin').val(response.pilihan_eks.jenis_kelamin);
      $('#eks_wajib').val(response.pilihan_eks.eks_wajib);
      $('#pilihan_eks').val(response.pilihan_eks.id_ekstrakulikuler).trigger('change');
      $('input:radio[value='+jk+']').attr('checked',true);
    },
    error: function(data) {
        // `data` will not be JSON
    }
});
    //jika nilai PPIC Jobs tidak kosong
    // if (siswa != '') {
    //     $.ajax({
    //         url: '" . yii\helpers\Url::to(["/shared/api/order/view?id="]) . "'+ppic_job+'&expand=item',
    //         type: 'GET',
    //         dataType: 'JSON',
    //         success: function (data) {
    //             $('#product_name').val(data.item.name);
    //             $('#up_count').val(data.item.up_count);
    //             $('#roll_width').val(data.item.roll_width);
    //             $('#roll_length').val(data.item.roll_length);
    //         },
    //         error: function () {
    //             alert('Tidak Dapat Menampilkan Data!');
    //         }
    //     });
    // }
});
});
</script>
</html>
