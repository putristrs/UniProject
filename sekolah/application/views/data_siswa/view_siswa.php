<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Admin | Data Siswa</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
 
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?php echo base_url('asset/admin/bower_components/bootstrap/dist/css/bootstrap.min.css'); ?>">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url('asset/admin/bower_components/font-awesome/css/font-awesome.min.css'); ?>">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?php echo base_url('asset/admin/bower_components/Ionicons/css/ionicons.min.css'); ?>">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url('asset/admin/dist/css/AdminLTE.min.css'); ?>">

  <link rel="stylesheet" href="<?php echo base_url('asset/admin/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css')?>">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?php echo base_url('asset/admin/dist/css/skins/_all-skins.min.css'); ?>">
  <!-- Morris chart -->
  <link rel="stylesheet" href="<?php echo base_url('asset/admin/bower_components/morris.js/morris.css'); ?>">
  <!-- jvectormap -->
  <link rel="stylesheet" href="<?php echo base_url('asset/admin/bower_components/jvectormap/jquery-jvectormap.css'); ?>">
  <!-- Date Picker -->
  <link rel="stylesheet" href="<?php echo base_url('asset/admin/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css'); ?>">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="<?php echo base_url('asset/admin/bower_components/bootstrap-daterangepicker/daterangepicker.css'); ?>">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="<?php echo base_url('asset/admin/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css'); ?>">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="index2.html" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>A</b>MN</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>ADMIN</b></span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
    
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="<?php echo base_url('asset/admin/dist/img/user2-160x160.jpg'); ?>" class="user-image" alt="User Image">
              <span class="hidden-xs">Admin</span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="<?php echo base_url('asset/admin/dist/img/user2-160x160.jpg'); ?>" class="img-circle" alt="User Image">

                <p>
                 Admin
                </p>
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="<?=site_url('admin/ubahprofile/')?>" class="btn btn-default btn-flat">Ubah Profile</a>
                </div>
                <div class="pull-right">
                  <a href="<?=site_url('login/logout')?>" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
          <li>
            <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?php echo base_url('asset/admin/dist/img/user2-160x160.jpg')?>" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Admin</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li class="active treeview">
         <!--  <a href="#">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a> -->
          <ul class="treeview-menu">
          <li><a href="<?=site_url('admin/view_siswa')?>"><i class="fa fa-circle-o"></i>Data Siswa</a></li>
          <li><a href="<?=site_url('admin/view_ekstrakurikuler')?>"><i class="fa fa-circle-o"></i>Data Ekstrakurikuler</a></li>
          <li><a href="<?=site_url('admin/view_rekapitulasi')?>"><i class="fa fa-circle-o"></i>Rekapitulasi Data</a></li>
           <li><a href="<?=site_url('admin/view_help')?>"><i class="fa fa-circle-o"></i>Help</a></li>
          </ul>
        </li>
        </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <!-- <section class="content-header">
      <h1>
        Data Ekstrakurikuler
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Data Ekstrakurikuler</li>
      </ol>
    </section> -->
    <!-- Main content -->
    <section class="content">
       <div class="box">
            <!-- /.box-header -->
        <center><h2 style="center">Daftar Siswa SMP Negeri 1 Banyubiru</h2>
        <span style="font-size: 20px">kelas VII dan VIII</span></center>
        <br>
        <P></h2>
                  <tr>
                  <th width="1000px"> <div class="box-footer">
                          <span style='color:red;font-size:14px;'>*Catatan:</span>
                          <br>
                          <span style='color:red;font-size:10px;'>Data siswa ini akan ditampilkan pada halaman website pendaftaran ekstrakurikuler</span>
                          <br>
                           <span style='color:red;font-size:10px;'>Sehingga siswa akan memasukan Ekstrakurikuler Pilihan yang tertera pada pendaftaran tersebut</span>
                        </div>
                  </th>
                </tr>
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                 <tr>
                    <th>
                    <a class="btn btn-primary btn-sm" style="float:left" data-toggle="modal" data-target="#myModal">Tambah </a>
                  </th>
                  <th>
                     <a href="<?=site_url('admin/delete_siswa_all/') ?>" onclick="return confirm('Yakin mau di hapus?');" class="btn btn-danger btn-sm" style="float:center">Detele All</a>
                  </th>
                    <th>
                      <form action="<?php echo base_url();?>Siswa/importFile" method="post" enctype="multipart/form-data">
                        <a href="#" class="btn btn-default btn-xs" style="width:90px;font-size: 10px; float:center;">
                         <span class="glyphicon glyphicon-print" style="width:70px;font-size: 10px; height:30px;"></span> 
                         <input style="width:70px;font-size: 10px;" type="file" name="uploadFile" id="uploadFile" value="" />
                        </a>
                      <br>
                      <input class="btn btn-default btn-xs" type="submit" name="submit" value="Upload" />
                      <span style='color:red;font-size:10px;'>*import file.xls</span>
                      </form> 
                    </th>      
                </tr>

                  <div id="myModal" class="modal fade" role="dialog">
                  <div class="modal-dialog">
                    <!-- konten modal-->
                    <div class="modal-content">
                      <!-- heading modal -->
                      <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                      <h4 class="modal-title">Data Siswa</h4>
                      </div>
                      <!-- body modal -->
                      <div class="modal-body">
                      <form role="form" action="<?php echo base_url(). 'admin/insert_siswa'; ?>" method="POST">
                      <div class="box-body">
                        <div class="form-group">
                          <input type="hidden" class="form-control"  name="id" id="id">
                          <label for="exampleInputEmail1">NIS</label>
                          <input type="number" class="form-control"  name="nim" id="nim" placeholder="Masukan NIS" required>
                        </div>
                        <div class="form-group">
                          <label for="exampleInputPassword1">Nama</label>
                          <input type="text" class="form-control"  name="nama_siswa" id="nama" placeholder="Masukan Nama" required>
                        </div>
                         <div class="form-group">
                          <label for="exampleInputPassword1">Kelas</label>
                            <select id="id_kelas" name="id_kelas" class="form-control">
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
                          <label><input type="radio" name="jenis_kelamin" value="L"> Lelaki</label>
                          <label><input type="radio" name="jenis_kelamin" value="P"> Perempuan</label>

                        </div>
                        <div class="form-group">
                          <label for="exampleInputPassword1">Ekstrakurikuler Wajib</label>
                        <select class="form-control" id="eks_wajib" name="eks_wajib" >
                        <option>-Pilih-</option>
                        <option value="Pramuka">Pramuka</option>
                        <option value="Tidak Ada">Tidak Ada</option>
                        </select>
                         <span style='color:red;font-size:11px;'>* Khusus untuk kelas 7</span>
                        </div>
                        <div class="form-group">
                          <label for="exampleInputPassword1">Ekstrakurikuler Pilihan</label>
                      <select id="id_ekstrakulikuler" name="id_ekstrakulikuler" class="form-control" Readonly>
                      <option value="<?= $pilihan_eks["0"]["id"]; ?>">-</option>
                      </select>  
                        </div>
                      </div>

              <!-- /.box-body -->
                        <div class="box-footer">
                          <span style='color:red;font-size:14px;'>*PERINGAKATAN !</span>
                          <br>
                          <span style='color:red;font-size:10px;'>untuk kolom ekstrakurikuler wajib dan pilihan dipilih</span>
                          <br>
                          <span style='color:red;font-size:10px;'>oleh siswa saat mendaftar ekstrakurikuler maka</span>
                          <br>
                          <span style='color:red;font-size:10px;'>dibiarkan dalam keadaan kosong</span>
                            <button type="submit" class="btn btn-primary" style="float:right">Submit</button>
                           <button type="button" class="btn btn-default" data-dismiss="modal" style="float:right">Back</button>
                        </div>
                      </form>
                      </div>
                    </div>
                  </div>
                </div>
                <tr>
                  <th width="10px">Nis</th>
                  <th>Nama</th>
                  <th width="50px">Kelas</th>
                  <th>Agama</th>
                  <th width="50px">Jenis Kelamin</th>
                  <th width="50px">Ekstrakurikuler Wajib</th>
                  <th width="50px">Ekstrakurikuler Pilihan</th>
                  <th>Status</th>
                  <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
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
                  <td><?php echo $row->eks_wajib?></td>
                  <td><?php echo $row->nama_ekstrakulikuler ?></td>
                  <td><?php echo ($row->status==0)?'belum disetujui':'disetujui'; ?></td> 
                  <td>
                      <a class="btn btn-primary btn-sm"  style="float:center" data-toggle="modal" data-target="#Modal<?=$row->id;?>">Setuju</a>   

                     <a class="btn btn-success btn-sm"  style="float:center" data-toggle="modal" data-target="#EditModal<?=$row->id;?>">Edit</a>   

                      <a href="<?=site_url('admin/delete_siswa/'.$row->id) ?>" onclick="return confirm('Yakin mau di hapus?');" class="btn btn-danger btn-sm" style="float:center">Delete</a>

                  </td>
                   <div id="Modal<?=$row->id;?>" class="modal fade" role="dialog">
                  <div class="modal-dialog">
                    <!-- konten modal-->
                    <div class="modal-content">
                      <!-- heading modal -->
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Status</h4>
                      </div>
                      <!-- body modal -->
                      <div class="modal-body">
                      <form role="form" action="<?php echo base_url(). 'admin/status_siswa?>'; ?>" method="POST">
                      <div class="box-body">
                        <input type="hidden" class="form-control" value="<?=$row->id?>" name="id" id="id">
                       <select id="status" name="status" class="form-control">
                       <option value="">-- Status Siswa --</option>
                       <option value="1">Setuju</option>
                       <option value="0">Tidak Setuju</option>
                      </select> 
                      </div>
              <!-- /.box-body -->
                        <div class="box-footer">
                          <button type="submit" class="btn btn-primary" style="float:right">Submit</button>
                          <button type="button" class="btn btn-default" data-dismiss="modal" style="float:right">Back</button>
                        </div>
                      </form>
                </tr>
                  <div id="EditModal<?=$row->id;?>"  name='id' value="<?=$row->id?>" class="modal fade" role="dialog">
                  <div class="modal-dialog">
                    <!-- konten modal-->
                    <div class="modal-content">
                      <!-- heading modal -->
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Edit Pendaftar</h4>
                      </div>
                      <!-- body modal -->
                      <div class="modal-body">
                      <form role="form" action="<?php echo base_url(). 'admin/update_siswa?>'; ?>" method="POST">
                      <div class="box-body">
                       <div class="form-group">
                          <input type="hidden" class="form-control" value="<?= $row->id?>" name="id" id="id">
                          <label for="exampleInputEmail1">NIS</label>
                          <input type="number" class="form-control"  name="nim" id="nim" placeholder="Masukan NIS" value="<?php echo $row->nim ?>" required>
                        </div>
                        <div class="form-group">
                          <label for="exampleInputPassword1">Nama</label>
                          <input type="text" class="form-control"  name="nama_siswa" id="nama" placeholder="Masukan Nama" value="<?php echo $row->nama_siswa ?>" required>
                        </div>
                         <div class="form-group">
                          <label for="exampleInputPassword1">Kelas</label>
                            <!-- <select id="id" name="kelas" class="form-control">
                            <option value="">-- Pilih Kelas --</option>
                           <option value="VII">VII</option>
                            <option value="VIII">VIII</option>
                          </select> -->
                           <!--  <select>
                              <?php foreach($kelas as $r){ ?>
                              <option value="<?= $r->id?>"><?php echo $r->nama_kelas; ?></option>
                            <?php } ?>
                            </select> -->
                            <?= form_dropdown('kelas', getDropdownList('tb_kelas',['id','nama_kelas'],'kelas'),$row->id_kelas, ['class' => 'form-control','id' => 'kelas']) ?>
                        </div>
                         <div class="form-group">
                          <label for="exampleInputPassword1">Agama</label>
                          <input type="text" class="form-control"  name="agama" id="agama" placeholder="Masukan Agama" value="<?php echo $row->agama ?>" required>
                        </div>
                         <div class="form-group">
                          <label for="jenis_kelamin">Jenis Kelamin</label>
                          <br>
                          <label><input type="radio" name="jenis_kelamin" value="L"<?php echo ($row->jenis_kelamin == 'L' ? ' checked' : ''); ?>> Lelaki</label>
                          <label><input type="radio" name="jenis_kelamin" value="P"<?php echo ($row->jenis_kelamin == 'P' ? ' checked' : ''); ?>> Perempuan</label>

                        </div>
                        <div class="form-group">
                          <label for="exampleInputPassword1">Ekstrakurikuler Wajib</label>
                          <input type="text" class="form-control"  name="eks_wajib" id="eks_wajib" value="<?php echo $row->eks_wajib?>" placeholder="Masukan Ekstrakurikuler Wajib"><span style='color:red;font-size:11px;'>* Khusus untuk kelas 7</span>
                        </div>
                        <div class="form-group">
                          <label for="exampleInputPassword1">Ekstrakurikuler Pilihan</label>
                     <!--  <select id="pilihan_eks" name="pilihan_eks" class="form-control">
                       <option value=''>-- Pilih Ekstrakurikuler --</option>
                      <?php
                      foreach($pilihan_eks as $dta) {
                      ?>
                         <option value="<?php echo $dta['id']; ?>"><?php echo $dta['nama_ekstrakulikuler']; ?></option>
                      <?php
                      }
                      ?>
                      </select>  --> 
                      <?= form_dropdown('pilihan_eks', getDropdownList('tb_ekstrakulikuler',['id','nama_ekstrakulikuler'],'Ekstrakurikuler'),$row->id_ekstrakulikuler, ['class' => 'form-control','id' => 'pilihan_eks', 'readonly'=> True] ) ?>
                        </div>
                      </div>
              <!-- /.box-body -->
                        <div class="box-footer">
                          <button type="submit" class="btn btn-primary" style="float:right">Submit</button>
                          <button type="button" class="btn btn-default" data-dismiss="modal" style="float:right">Back</button>
                        </div>
                      </form>
                <?php } ?>
                </tfoot>
              </table>
               <a href="<?php echo base_url().'admin/createXLS?>'; ?>" class="btn btn-default btn-sm">
                       <span class="glyphicon glyphicon-print"></span> unduh 
                    </a>  <span style='color:red;font-size:10px;'>*Unduh file dalam .xls</span>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 2.4.18
    </div>
    <strong>Copyright &copy; 2019 <a href="https://adminlte.io">SMP Negeri 1 Banyubiru</a>.</strong> All rights
    reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark" style="display: none;">
    <!-- Create the tabs -->
    <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
      <li><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
      <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
    </ul>
    <!-- Tab panes -->
    <div class="tab-content">
      <!-- Home tab content -->
      <div class="tab-pane" id="control-sidebar-home-tab">
        <h3 class="control-sidebar-heading">Recent Activity</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-birthday-cake bg-red"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Langdon's Birthday</h4>

                <p>Will be 23 on April 24th</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-user bg-yellow"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Frodo Updated His Profile</h4>

                <p>New phone +1(800)555-1234</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-envelope-o bg-light-blue"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Nora Joined Mailing List</h4>

                <p>nora@example.com</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-file-code-o bg-green"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Cron Job 254 Executed</h4>

                <p>Execution time 5 seconds</p>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

        <h3 class="control-sidebar-heading">Tasks Progress</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Custom Template Design
                <span class="label label-danger pull-right">70%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Update Resume
                <span class="label label-success pull-right">95%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-success" style="width: 95%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Laravel Integration
                <span class="label label-warning pull-right">50%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-warning" style="width: 50%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Back End Framework
                <span class="label label-primary pull-right">68%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-primary" style="width: 68%"></div>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

      </div>
      <!-- /.tab-pane -->
      <!-- Stats tab content -->
      <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>
      <!-- /.tab-pane -->
      <!-- Settings tab content -->
      <div class="tab-pane" id="control-sidebar-settings-tab">
        <form method="post">
          <h3 class="control-sidebar-heading">General Settings</h3>

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Report panel usage
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Some information about this general settings option
            </p>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Allow mail redirect
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Other sets of options are available
            </p>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Expose author name in posts
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Allow the user to show his name in blog posts
            </p>
          </div>
          <!-- /.form-group -->

          <h3 class="control-sidebar-heading">Chat Settings</h3>

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Show me as online
              <input type="checkbox" class="pull-right" checked>
            </label>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Turn off notifications
              <input type="checkbox" class="pull-right">
            </label>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Delete chat history
              <a href="javascript:void(0)" class="text-red pull-right"><i class="fa fa-trash-o"></i></a>
            </label>
          </div>
          <!-- /.form-group -->
        </form>
      </div>
      <!-- /.tab-pane -->
    </div>
  </aside>
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="<?php echo base_url('asset/admin/bower_components/jquery/dist/jquery.min.js')?>"></script>
<!-- jQuery UI 1.11.4 -->
<script src="<?php echo base_url('asset/admin/bower_components/jquery-ui/jquery-ui.min.js')?>"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo base_url('asset/admin/bower_components/bootstrap/dist/js/bootstrap.min.js')?>"></script>
<!-- Morris.js charts -->
<script src="<?php echo base_url('asset/admin/bower_components/raphael/raphael.min.js')?>"></script>
<script src="<?php echo base_url('asset/admin/bower_components/morris.js/morris.min.js')?>"></script>
<!-- Sparkline -->
<script src="<?php echo base_url('asset/admin/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js')?>"></script>
<!-- jvectormap -->
<script src="<?php echo base_url('asset/admin/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js')?>"></script>
<script src="<?php echo base_url('asset/admin/plugins/jvectormap/jquery-jvectormap-world-mill-en.js')?>"></script>
<!-- jQuery Knob Chart -->
<script src="<?php echo base_url('asset/admin/bower_components/jquery-knob/dist/jquery.knob.min.js')?>"></script>
<!-- daterangepicker -->
<script src="<?php echo base_url('asset/admin/bower_components/moment/min/moment.min.js')?>"></script>
<script src="<?php echo base_url('asset/admin/bower_components/bootstrap-daterangepicker/daterangepicker.js')?>"></script>
<!-- datepicker -->
<script src="<?php echo base_url('asset/admin/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js')?>"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="<?php echo base_url('asset/admin/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js')?>"></script>
<!-- Slimscroll -->
<script src="<?php echo base_url('asset/admin/bower_components/jquery-slimscroll/jquery.slimscroll.min.js')?>"></script>
<!-- FastClick -->
<script src="<?php echo base_url('asset/admin/bower_components/fastclick/lib/fastclick.js')?>"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url('asset/admin/dist/js/adminlte.min.js')?>"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?php echo base_url('asset/admin/dist/js/pages/dashboard.js')?>"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url('asset/admin/dist/js/demo.js')?>"></script>

<script src="<?php echo base_url('asset/admin/bower_components/datatables.net/js/jquery.dataTables.min.js')?>"></script>
<script src="<?php echo base_url('asset/admin/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js')?>"></script>

<script>
  var vidFileLength = $("#uploadFile")[0].files.length;
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
<script>
  var id = $("#selectId option:selected").attr("id")
</script>
</body>
</html>
