<?php


include 'koneksi.php';
$data = mysqli_query($koneksi, "SELECT *FROM kritik ");
$rows = [];
while($row = mysqli_fetch_assoc($data)){
    $rows[] = $row;
}

?>




<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  </head>
  <body>
    <h1>Halaman Admin</h1>

    <table class="table table-striped">
  <tr>
    <th>No</th>
    <th>Ket</th>
    <th>Foto</th>
    <th>Nama Perpustakaan</th>
    <th>Deskripsi</th>
    <th>Alamat</th>
    <th>Kabupaten</th>
    <th>Tahun Dibangun</th>
        
  </tr>
  <tr>
    <td>1.</td>
    <td>Upload || Hapus</td>
    <td><img src="sulsel.png" width="50" height="50"></td>
    <td>Perpustakaan</td>
    <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium voluptate nesciunt dicta pariatur necessitatibus repellat architecto amet tempore illo corrupti qui, culpa, soluta consectetur ipsum sequi ab, dolores error recusandae?</td>
    <td>Jalan Mesjid Raya</td>
    <td>Gowa</td>
    <td>20002</td>
  </tr>
</table>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  </body>
</html>
