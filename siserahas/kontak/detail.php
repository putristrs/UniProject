
<h1 align="center">SMS Gateway</h1>
<p align="center">Selamat Datang Di Menu SMS Gateway Servis Motor PT.AHASS Surya Cipta Pratama Semarang</p>
<hr>
<h3>Daftar Kontak</h3>


    
<table align="center" display="inline">
  <?php
  
   
                   $no=1;
                    $query = mysqli_query($koneksi, "SELECT a.*, a.id AS iddaftarkontak, b.* FROM daftarkontak a, user b WHERE a.polisi_id=b.id");
                    if (mysqli_num_rows($query) > 0) {
                     while ($data = mysqli_fetch_array($query)) {
                    echo "<tr>";
                    echo "<th>No : </th>";
                    echo "<td>".$no."</td>";
                    echo "</tr>";

                    echo "<tr>";
                    echo "<th>No Polisi : </th>";
                    echo "<td>".$data['nopolisi']."</td>";
                    echo "</tr>";


                    echo "<tr>";
                    echo "<th>Nama : </th>";
                    echo "<td>".$data['nama']."</td>";
                    echo "</tr>";

                    echo "<tr>";
                    echo "<th>Nomor Handphone : </th>";
                    echo "<td>".$data['nomorhandphone']."</td>";
                    echo "</tr>";
                  
 }
  }

  ?>

</table>

            <button>
                   <a href="?page=daftarkontak">
                    Kembali
                  </a>
                </button>
                