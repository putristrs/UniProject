
<?php
// Skrip berikut ini adalah skrip yang bertugas untuk meng-export data tadi ke excell
header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=daftarkontak.xls");
?>
<h3>Daftar Kontak</h3>
    
<table border="1" cellpadding="5">
  <tr>
  <th>No.</th>>
  <th>No. Polisi</th>>
  <td>Nama</td>
  <th>Nomor Handphone</th>
  </tr>
  <?php
  // Load file koneksi.php
	include '../database/koneksi.php';
   
 		               $no=1;
                    $query = mysqli_query($koneksi, "SELECT a.*, a.id AS iddaftarkontak, b.* FROM daftarkontak a, user b WHERE a.polisi_id=b.id");
                    if (mysqli_num_rows($query) > 0) {
                     while ($data = mysqli_fetch_array($query)) {
                  	echo "<tr>";
                  	echo "<td>".$no."</td>";
              	    echo "<td>".$data['nopolisi']."</td>";
              	    echo "<td>".$data['nama']."</td>";
              	    echo "<td>".$data['nomorhandphone']."</td>";
              	    echo "</tr>";
                  
 }
  }
  ?>
</table>