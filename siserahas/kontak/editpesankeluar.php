<?php

$id = $_GET['id'];

$result = mysqli_query($koneksi, "SELECT * FROM pesankeluar WHERE id=$id");

while($data = mysqli_fetch_array($result))
{
  $id_data = $data['id'];
  $tanggaljam = $data['tanggaljam'];
  $no_polisi  = $data['no_polisi'];
  $nama       = $data['nama'];
  $nomorhandphone = $data['nomorhandphone'];
  $kontenpesan    = $data['kontenpesan'];
  $status         = $data['status'];
}

 ?>


 <div class="main-content">
   <div class="main-content-inner">
     <div class="breadcrumbs ace-save-state" id="breadcrumbs">
       <ul class="breadcrumb">
         <li>
           <i class="ace-icon fa fa-home home-icon"></i>
           <a href="#">Home</a>
         </li>

         <li>
           <a href="#">Pesan Keluar</a>
         </li>
         <li class="active">Edit data</li>
       </ul><!-- /.breadcrumb -->

       <div class="nav-search" id="nav-search">
         <form class="form-search">
           <span class="input-icon">
             <input type="text" placeholder="Search ..." class="nav-search-input" id="nav-search-input" autocomplete="off" />
             <i class="ace-icon fa fa-search nav-search-icon"></i>
           </span>
         </form>
       </div><!-- /.nav-search -->
     </div>

     <div class="page-content">
       <div class="ace-settings-container" id="ace-settings-container">
         <div class="btn btn-app btn-xs btn-warning ace-settings-btn" id="ace-settings-btn">
           <i class="ace-icon fa fa-cog bigger-130"></i>
         </div>

         <div class="ace-settings-box clearfix" id="ace-settings-box">
           <div class="pull-left width-50">
             <div class="ace-settings-item">
               <div class="pull-left">
                 <select id="skin-colorpicker" class="hide">
                   <option data-skin="no-skin" value="#438EB9">#438EB9</option>
                   <option data-skin="skin-1" value="#222A2D">#222A2D</option>
                   <option data-skin="skin-2" value="#C6487E">#C6487E</option>
                   <option data-skin="skin-3" value="#D0D0D0">#D0D0D0</option>
                 </select>
               </div>
               <span>&nbsp; Choose Skin</span>
             </div>

             <div class="ace-settings-item">
               <input type="checkbox" class="ace ace-checkbox-2 ace-save-state" id="ace-settings-navbar" autocomplete="off" />
               <label class="lbl" for="ace-settings-navbar"> Fixed Navbar</label>
             </div>

             <div class="ace-settings-item">
               <input type="checkbox" class="ace ace-checkbox-2 ace-save-state" id="ace-settings-sidebar" autocomplete="off" />
               <label class="lbl" for="ace-settings-sidebar"> Fixed Sidebar</label>
             </div>

             <div class="ace-settings-item">
               <input type="checkbox" class="ace ace-checkbox-2 ace-save-state" id="ace-settings-breadcrumbs" autocomplete="off" />
               <label class="lbl" for="ace-settings-breadcrumbs"> Fixed Breadcrumbs</label>
             </div>

             <div class="ace-settings-item">
               <input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-rtl" autocomplete="off" />
               <label class="lbl" for="ace-settings-rtl"> Right To Left (rtl)</label>
             </div>

             <div class="ace-settings-item">
               <input type="checkbox" class="ace ace-checkbox-2 ace-save-state" id="ace-settings-add-container" autocomplete="off" />
               <label class="lbl" for="ace-settings-add-container">
                 Inside
                 <b>.container</b>
               </label>
             </div>
           </div><!-- /.pull-left -->

           <div class="pull-left width-50">
             <div class="ace-settings-item">
               <input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-hover" autocomplete="off" />
               <label class="lbl" for="ace-settings-hover"> Submenu on Hover</label>
             </div>

             <div class="ace-settings-item">
               <input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-compact" autocomplete="off" />
               <label class="lbl" for="ace-settings-compact"> Compact Sidebar</label>
             </div>

             <div class="ace-settings-item">
               <input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-highlight" autocomplete="off" />
               <label class="lbl" for="ace-settings-highlight"> Alt. Active Item</label>
             </div>
           </div><!-- /.pull-left -->
         </div><!-- /.ace-settings-box -->
       </div><!-- /.ace-settings-container -->

       <div class="page-header">
         <h1>
           Kontak Pelanggan
           <small>
             <i class="ace-icon fa fa-angle-double-right"></i>
             Edit Data
           </small>
         </h1>
       </div><!-- /.page-header -->

       <div class="row">
         <div class="col-xs-12">

           <div class="row" style="padding: 20px;">
             <div class="col-md-1">

             </div>


               <form class="form-horizontal" role="form" action="kontak/proseseditpesankeluar.php" method="post" enctype="multipart/form-data">

                 <input type="hidden" name="id" value="<?php echo $id_data; ?>">
                 <div class="col-md-6">
                 <div class="form-group">
                   <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> ID:</label>

                   <div class="col-sm-9">
                     <select name="admin">
                       <?php
                       $query = mysqli_query($koneksi,"SELECT * FROM user WHERE level='admin'");
                       if (mysqli_num_rows($query) > 0) {
                         while ($data = mysqli_fetch_array($query)) { ?>

                     <option value="<?php echo $data['id']; ?>"><?php echo $data['kode_pesankeluar']; ?></option>
                         <?php
                       }
                     }
                      ?>
                     </select>
                   </div>
                 </div>

                 <div class="form-group">
                   <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Tanggal & Jam</label>

                   <div class="col-sm-9">
                     <input type="timestamp" name="tanggaljam" id="form-field-1" value="<?php date_default_timezone_set('Asia/Jakarta'); echo  date('d/m/Y H:i:s');?>" placeholder="No Polisi" class="form-control" required/>
                   </div>
                 </div>

                 <div class="form-group">
                   <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> No. Polisi</label>

                   <div class="col-sm-9">
                     <input type="text" name="no_polisi" id="form-field-1" value="<?php echo $no_polisi ?>" placeholder="No Polisi" class="form-control" required/>
                   </div>
                 </div>

                 <div class="form-group">
                   <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Nama</label>

                   <div class="col-sm-9">
                     <input type="text" name="nama" id="form-field-1" value="<?php echo $nama ?>" placeholder="Nama" class="form-control" required />
                   </div>
                 </div>

                 <div class="form-group">
                   <label class="col-sm-3 control-label no-padding-right" for="form-field-1-1"> Nomor Handphone </label>

                   <div class="col-sm-9">
                     <input type="text" name="nomorhandphone" id="form-field-1-1" value="<?php echo $nomorhandphone; ?>" placeholder="Nomor Handphone" class="form-control" required/>
                   </div>
                 </div>

                 <div class="form-group">
                   <label class="col-sm-3 control-label no-padding-right" for="form-field-1-1"> Konten Pesan</label>

                   <div class="col-sm-9">
                     <input type="text" name="kontenpesan" id="form-field-1-1" value="<?php echo $kontenpesan; ?>" placeholder="Konten Pesan" class="form-control"  required />
                   </div>
                 </div>

                 <div class="form-group">
                   <label class="col-sm-3 control-label no-padding-right" for="form-field-1-1"> Status </label>

                   <div class="col-sm-9">
                     <input type="text" name="status" id="form-field-1-1" value="<?php echo $status; ?>" placeholder="Status" class="form-control" required />
                   </div>
                 </div>


                 <!-- <div class="form-group">
                   <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Foto</label>

                   <div class="col-sm-9">
                     <input style="border: 1px solid #eaeaea; padding: 5px;" name="foto" type="file" id="form-field-1" placeholder="Foto" class="form-control" />
                   </div>
                 </div> -->

                 <div class="clearfix form-actions">
                   <div class="col-md-offset-3 col-md-9">
                     <button class="btn btn-info" type="submit" name="update">
                       <i class="ace-icon fa fa-check bigger-110"></i>
                     Kirim
                     </button>

                     &nbsp; &nbsp; &nbsp;
                     <button class="btn btn-danger" type="reset">
                       <i class="ace-icon fa fa-undo bigger-110"></i>
                       Reset
                     </button>
                   </div>
                 </div>
                </div>
               </form>
           </div>
           <!-- PAGE CONTENT BEGINS -->
         </div><!-- /.col -->
       </div><!-- /.row -->
     </div><!-- /.page-content -->
   </div>
 </div><!-- /.main-content -->


 <div class="modal fade bs-example-modal-sm" id="user-foto" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true" style="padding-top: 100px;">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">

    

    </div>
  </div>
</div>
