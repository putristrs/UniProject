<?php

$id = $_GET['id'];

$result = mysqli_query($koneksi, "SELECT * FROM antrian WHERE id=$id");

while($data = mysqli_fetch_array($result))
{
  $id = $data['id'];
	$status = $data['status'];
	$no_polisi = $data['no_polisi'];
  $pemilik = $data['pemilik'];
  $pkb = $data ['pkb'];
  $keluhan = $data['keluhan'];
  $mulai  = $data['mulai'];
  $selesai = $data['selesai'];
  $mekanik = $data['mekanik'];
  $bayar = $data['bayar'];
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
           <a href="#">Antrian</a>
         </li>
         <li class="active">Edit Antrian</li>
       </ul><!-- /.breadcrumb -->

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
           Antrian
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


               <form class="form-horizontal" role="form" action="page/proseseditantrian.php" method="post" enctype="multipart/form-data">

                 <input type="hidden" name="id" value="<?php echo $id; ?>">
                 <div class="col-md-6">
                 <div class="form-group">
                   <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Sebagai:</label>

                   <div class="col-sm-9">
                     <select name="admin">
                       <?php
                       $query = mysqli_query($koneksi,"SELECT * FROM user WHERE level='admin'");
                       if (mysqli_num_rows($query) > 0) {
                         while ($data = mysqli_fetch_array($query)) { ?>

                     <option value="<?php echo $data['id']; ?>"><?php echo $data['kode_antrian']; ?></option>
                         <?php
                       }
                     }
                      ?>
                     </select>
                   </div>
                 </div>

                 <div class="form-group">
                   <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Status</label>

                  <div class="col-sm-9">
                      <select name="status" required>
                      <option>Proses</option>
                      <option>Menunggu</option>
                      <option>Selesai</option>
                      <option>Batal Servis</option>
                     </select>
                  </div>
                 </div>

                 <div class="form-group">
                   <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> No Polisi</label>

                   <div class="col-sm-9">
                     <input type="text" name="no_polisi" id="form-field-1" value="<?php echo $no_polisi ?>" placeholder="No Polisi" class="form-control" required />
                   </div>
                 </div>

                 <div class="form-group">
                   <label class="col-sm-3 control-label no-padding-right" for="form-field-1-1"> Pelanggan </label>

                   <div class="col-sm-9">
                     <input type="text" name="pemilik" id="form-field-1-1" value="<?php echo $pemilik; ?>" placeholder="Pelanggan" class="form-control" required />
                   </div>
                 </div>

                 <div class="form-group">
                   <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> PKB</label>

                   <div class="col-sm-9">
                     <input type="text" name="pkb" id="form-field-1" value="<?php echo $pkb; ?>" placeholder="PKB" class="form-control" required/>
                   </div>
                 </div>

                 <div class="form-group">
                   <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Keluhan</label>

                   <div class="col-sm-9">
                     <input type="text" name="keluhan" id="form-field-1" value="<?php echo $keluhan; ?>" placeholder="Keluhan" class="form-control" required/>
                   </div>
                 </div>

                 <div class="form-group">
                   <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Mulai</label>

                   <div class="col-sm-9">
                     <input type="date" name="mulai" id="form-field-1" value="<?php echo $mulai; ?>" placeholder="Mulai" class="form-control" required/>
                   </div>
                 </div>


                 <div class="form-group">
                   <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Selesai</label>

                   <div class="col-sm-9">
                     <input type="timestamp" name="selesai" id="form-field-1" value="<?php date_default_timezone_set('Asia/Jakarta'); echo  date('d/m/Y H:i:s');?>" placeholder="Selesai" class="form-control" required />
                   </div>
                 </div>

                  <div class="form-group">
                   <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Mekanik</label>

                   <div class="col-sm-9">
                     <input type="text" name="mekanik" id="form-field-1" value="<?php echo $mekanik; ?>" placeholder="mekanik" class="form-control" required/>
                   </div>
                 </div>

                  <div class="form-group">
                   <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Bayar</label>

                    <div class="col-sm-9"> 
                    <br/>
                    <input type="radio" name="bayar" value="Belum" required/>Belum
                    <input type="radio" name="bayar" value="Sudah" required/>Sudah
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
                       Update
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

    <form method="post" action="page/proseseditantrian.php" enctype="multipart/form-data">

      <input type="hidden" name="id" value="<?php echo $id_data; ?>">

      <div class="modal-body">
        <div class="text-primary">
          <input type="file" name="foto">
        </div>
      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal"><span class="fa fa-close"></span> close</button>
        <button type="submit" name="upload" class="btn btn-primary"><span class="fa fa-upload"></span> upload</button>
      </div>
    </form>

    </div>
  </div>
</div>
