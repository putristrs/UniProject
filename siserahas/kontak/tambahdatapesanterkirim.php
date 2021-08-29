<div class="main-content">
  <div class="main-content-inner">
    <div class="breadcrumbs ace-save-state" id="breadcrumbs">
      <ul class="breadcrumb">
        <li>
          <i class="ace-icon fa fa-home home-icon"></i>
          <a href="#">Home</a>
        </li>

        <li>
          <a href="#">Pesan Terkirim</a>
        </li>
        <li class="active">Tambah data</li>
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
         
          <small>
            <i class="ace-icon fa fa-angle-double-right"></i>
            Tambah Data
          </small>
        </h1>
      </div><!-- /.page-header -->

      <div class="row">
        <div class="col-xs-12">
          <!-- PAGE CONTENT BEGINS -->
          <form class="form-horizontal" role="form" action="page/prosestambahpesanterkirim.php" method="post" enctype="multipart/form-data">
            <div class="form-group">
              <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> ID:</label>

              <div class="col-sm-9">
                <select name="admin">
                  <?php

                  $query = mysqli_query($koneksi,"SELECT * FROM user WHERE level='admin'");
                  if (mysqli_num_rows($query) > 0) {
                    while ($data = mysqli_fetch_array($query)) { ?>

                  <option value="<?php echo $data['id']; ?>"><?php echo $data['kode_pesanterkirim']; ?></option>
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
                <input type="timestamp" name="tanggaljam" id="form-field-1" placeholder="Tanggal & Jam" value="<?php date_default_timezone_set('Asia/Jakarta'); echo  date('d/m/Y H:i:s');?>" required class="col-xs-10 col-sm-5" />
              </div>
            </div>

            <div class="form-group">
              <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> No. Polisi</label>

              <div class="col-sm-9">
                <input type="text" name="no_polisi" id="form-field-1" placeholder="No Polisi" class="col-xs-10 col-sm-5" required />
              </div>
            </div>

            <div class="form-group">
              <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Nama</label>

              <div class="col-sm-9">
                <input type="text" name="nama" id="form-field-1" placeholder="Nama" class="col-xs-10 col-sm-5" required/>
              </div>
            </div>

            <div class="form-group">
              <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Nomor Handphone</label>

              <div class="col-sm-9">
                <input type="number" name="nomorhandphone" id="form-field-1" placeholder="Nomor Handphone" class="col-xs-10 col-sm-5" required/>
              </div>
            </div>

            <div class="form-group">
              <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Konten Pesan</label>

              <div class="col-sm-9">
                <input type="text" name="kontenpesan" id="form-field-1" placeholder="kontenpesan" class="col-xs-10 col-sm-5" required/>
              </div>
            </div>
           
            <div class="clearfix form-actions">
              <div class="col-md-offset-3 col-md-9">
                <button class="btn btn-info" type="submit" name="tambah">
                  <i class="ace-icon fa fa-check bigger-110"></i>
                  Tambah
                </button>

                &nbsp; &nbsp; &nbsp;
                <button class="btn btn-danger" type="reset">
                  <i class="ace-icon fa fa-undo bigger-110"></i>
                  Reset
                </button>
              </div>
            </div>

          </form>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.page-content -->
  </div>
</div><!-- /.main-content -->
