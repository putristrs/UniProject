
<?php
// Skrip berikut ini adalah skrip yang bertugas untuk meng-export data tadi ke excell
header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=antrian.xls");
?>
<h1>PT. AHASS Surya Cipta Pratama - 00956</h1>
<h2>Jl. Dr. Cipto 82, Semarang</h2>
<h3>Data Antrian</h3>
    
<table border="1" cellpadding="5">
  <tr>
    <th>Antrian</th>
    <th>Status</th>
    <th>No Polisi</th>
    <th>Pemilik</th>
    <th>Pkb</th>
    <th>Keluhan</th>
    <th>Mulai</th>
    <th>Selesai</th>
    <th>Mekanik</th>
    <th>Bayar</th>
  </tr>
  <?php
  // Load file koneksi.php
	include '../database/koneksi.php';
   
 		               $no=1;
                    $query = mysqli_query($koneksi, "SELECT * FROM antrian");
                    if (mysqli_num_rows($query) > 0) {
                     while ($data = mysqli_fetch_array($query)) {
                  	echo "<tr>";
                  	echo "<td>".$no."</td>";
              	    echo "<td>".$data['status']."</td>";
              	    echo "<td>".$data['no_polisi']."</td>";
              	    echo "<td>".$data['pemilik']."</td>";
              	    echo "<td>".$data['pkb']."</td>";
              	    echo "<td>".$data['keluhan']."</td>";
              	    echo "<td>".$data['mulai']."</td>";
              	    echo "<td>".$data['selesai']."</td>";
              	    echo "<td>".$data['mekanik']."</td>";
              	    echo "<td>".$data['bayar']."</td>";
              	    echo "</tr>";
                  
 }
  }
  ?>
</table>