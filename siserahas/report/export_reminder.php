
<?php
// Skrip berikut ini adalah skrip yang bertugas untuk meng-export data tadi ke excell
header("Content-type: application/vnd-ms-word");
header("Content-Disposition: attachment; filename=reminder.doc");
?>
<h1>PT. AHASS Surya Cipta Pratama - 00956</h1>
<h2>Jl. Dr. Cipto 82, Semarang</h2>
<h3>Data Reminder</h3>
    
<table border="1" cellpadding="5">
  <tr>
    <th>No.</th>
    <th>KPB</th>
    <th>Keterangan</th>
    <th>Biaya</th>
    <th>Fasilitas</th>
  </tr>
  <?php
  // Load file koneksi.php
	include '../database/koneksi.php';
   
 		               $no=1;
                    $query = mysqli_query($koneksi, "SELECT a.*, a.id AS idreminder, b.* FROM reminder a, user b WHERE a.reminder_id=b.id");
                    if (mysqli_num_rows($query) > 0) {
                     while ($data = mysqli_fetch_array($query)) {
                  	echo "<tr>";
                  	echo "<td>".$no."</td>";
              	    echo "<td>".$data['kpb']."</td>";
              	    echo "<td>".$data['keterangan']."</td>";
              	    echo "<td>".$data['biaya']."</td>";
              	    echo "<td>".$data['fasilitas']."</td>";
              	    echo "</tr>";
                  
 }
  }
  ?>
</table>