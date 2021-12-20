<h2>List Dosen</h2>
<table border="1">
    <tr>
      <th>NO</th>
      <th>Nama</th>
      <th>Tanggal lahir</th>
      <th>Tempat lahir</th>
      <th>Prodi</th>
      <th>Fakultas</th>
      <th>Alamat</th>
    </tr>
    <?php
    include './function/config.php';
    $dosen = mysqli_query($koneksi, "SELECT * from dosen ");
    foreach ($dosen as $row){
        echo "<tr>
            <td>".$row['id']."</td>
            <td>".$row['namadosen']."</td>
            <td>".$row['tanggallahir']."</td>
            <td>".$row['tempatlahir']."</td>
            <td>".$row['programstudi']."</td>
            <td>".$row['fakultas']."</td>
            <td>".$row['alamatrumah']."</td>
              </tr>";
    }
    ?>
</table>