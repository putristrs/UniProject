<div class="table-responsive">
    <table class="table table-hover tablesorter">
        <thead>
            <tr>
                <th class="header">Nis</th>
                <th class="header">Nama</th>                           
                <th class="header">Kelas</th>                      
                <th class="header">Agama</th>
                <th class="header">Jenis Kelamin</th>
                <th class="header">Ekstrakurikuler Wajib</th>
                <th class="header">Ekstrakurikuler Pilihan</th>
                <th class="header">Status</th>
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
                  <td><?php echo $row->kelas ?></td>
                  <td><?php echo $row->agama ?></td>
                  <td><?php echo $row->jenis_kelamin ?></td>
                  <td><?php echo $row->eks_wajib ?></td>
                  <td><?php echo $row->nama_ekstrakulikuler ?></td>
                  <td><?php echo ($row->status==0)?'belum disetujui':'disetujui'; ?></td> 
                </tr>
            <?php } ?>
 
        </tbody>
    </table>
    <a class="pull-right btn btn-primary btn-xs" href="<?php echo site_url()?>admin/createXLS"><i class="fa fa-file-excel-o"></i> Export Data</a>
</div> 