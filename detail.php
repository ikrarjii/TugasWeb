<?php
$id = $_GET["id"];

include 'koneksi.php';
$data = mysqli_query($koneksi, "SELECT *FROM informasi WHERE id='$id' ");
$rows = [];
while($row = mysqli_fetch_assoc($data)){
    $rows[] = $row;
}
// var_dump($rows);  
?>





<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

    <style>
      /* .container{
        /* background-color: #e2edff; */
      */
    </style>
  </head>

  <body>

      <!--Navbar-->

      <nav class="navbar navbar-expand-lg navbar-dark bg-primary shadow-sm">
        <div class="container">
          <a class="navbar-brand" href="#">SISTEM INFORMASI</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="indexi.php#about">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="indexi.php#portfolio">Information</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="indexi.php#contact">Contact</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
  
      <!--Akhir Navbar-->
  

    
<div class="container">
    <div class="row">
        <div class="col-md-4">
            <img src="sulsel.png" alt="" class="img-fluid">
        </div>
        <div class="col-md-8">
            <h1><?= $rows[0]["Nama_Perpus"]; ?></h1>
            <?= $rows[0]["Deskripsi"]; ?>
            <table class="table table-borderless">
                <tbody>
                  <tr>
                    <td>Alamat  </td>
                    <td>:</td>
                    <td>Jalan Mesjid Raya</td>
                  </tr>
                  <tr>
                    <td>Kabupaten</td>
                    <td>:</td>
                    <td>Gowa</td>
                  </tr>
                  <tr>
                    <td>Tahun di bangun</td>
                    <td>:</td>
                    <td>2002</td>                  
                  </tr>
                  <tr>

                    <td><a class="btn btn-primary" href="editData.php?id=<?=$rows[0]['id']?>">Edit Data</a></td>
                  </tr>
                  
                </tbody>
              </table>
        </div>
    </div>
  </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  </body>
</html>
