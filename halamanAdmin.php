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
    <th>Nama</th>
    <th>Email</th>
    <th>Phone</th>
    <th>Pesan</th>
  </tr>
  <?php foreach($rows as $p) : ?>
  <tr>
    <td><?= $p["nama"]; ?></td>
    <td><?= $p["email"]; ?></td>
    <td><?= $p["phone"]; ?></td>
    <td><?= $p["pesan"]; ?></td>
  </tr>

  <?php endforeach; ?>
</table>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  </body>
</html>
