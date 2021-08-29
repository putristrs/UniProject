
<?php
// Skrip berikut ini adalah skrip yang bertugas untuk meng-export data tadi ke excell
header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=pesanterkirim.xls");
?>
<h3>Pesan Terkirim</h3>
    
   <table border="1" cellpadding="5">
  <tr>
  <th>No</th>
  <th>Tanggal&Jam</th>
  <th>No Polisi</th>
  <th>Nama</th>
  <th> Nomor Handphone</th>
  <th>Konten Pesan</th>
  </tr>
  <?php
  // Load file koneksi.php
	include '../database/koneksi.php';
   
 		               $no=1;
                    $query = mysqli_query($koneksi, "SELECT a.*, a.id AS idpesanterkirim, b.* FROM pesanterkirim a, user b WHERE a.terkirim_id=b.id");
                    if (mysqli_num_rows($query) > 0) {
                     while ($data = mysqli_fetch_array($query)) {
                  	echo "<tr>";
                  	echo "<td>".$no."</td>";
              	    echo "<td>".$data['tanggaljam']."</td>";
              	    echo "<td>".$data['no_polisi']."</td>";
                    echo "<td>".$data['nama']."</td>";
              	    echo "<td>".$data['nomorhandphone']."</td>";
                    echo "<td>".$data['kontenpesan']."</td>";
              	    echo "</tr>";
                  
 }
  }
  ?>
</table>