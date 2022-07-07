<?php
$id = $_GET["id"];

include 'koneksi.php';
$data = mysqli_query($koneksi, "SELECT *FROM informasi WHERE id='$id' ");
$rows = [];
while($row = mysqli_fetch_assoc($data)){
    $rows[] = $row;
}

if(isset($_POST['submit'])){
    $nama = $_POST['Nama_Perpus'];
    $Deskripsi = $_POST['Deskripsi'];
    $Alamat = $_POST['Alamat'];
    $Kabupaten = $_POST['Kabupaten'];
    $Tahun = $_POST['Tahun'];
    $id = $_POST['id'];
    


    $query =    "UPDATE informasi SET
    Nama_Perpus = '$nama',
    Deskripsi = '$Deskripsi',
    Alamat = '$Alamat',
    Kabupaten = '$Kabupaten',
    Tahun = '$Tahun'
    WHERE id=$id
    ";
$cek = mysqli_query($koneksi, $query);
if($cek > 0){
    header("location: indexi.php");
}
}
?>





<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Edit Data</title>
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
            <form action="" method="post">
                <table class="table table-borderless">
                    <tbody>
                        <input type="hidden" name="id" value="<?=$rows[0]['id']?>">
                     <tr>
                        <td>Nama </td>
                        <td>:</td>
                        <td><input type="text" name="Nama_Perpus" id="" value="<?=$rows[0]['Nama_Perpus']?>"></td>
                      </tr>
                      <tr>
                        <td>Deskripsi</td>
                        <td>:</td>
                        <td><input type="text" name="Deskripsi" id="" value="<?=$rows[0]['Deskripsi']?>"></td>
                      </tr>
                      <tr>
                        <td>Alamat  </td>
                        <td>:</td>
                        <td><input type="text" name="Alamat" id="" value="<?=$rows[0]['Alamat']?>"></td>
                      </tr>
                      <tr>
                        <td>Kabupaten</td>
                        <td>:</td>
                        <td><input type="text" name="Kabupaten" id=" " value=" <?=$rows[0]['Kabupaten']?>" ></td>
                      </tr>
                      <tr>
                        <td>Tahun di bangun</td>
                        <td>:</td>
                        <td><input type="text" name="Tahun" id="" value="<?=$rows[0]['Tahun']?>"></td>                  
                      </tr>
                      <tr>
                        <td><button type="submit" name="submit" class="btn btn-primary">Ubah Data</button></td>


                      </tr>
                    </tbody>
                </table>
            </form>
        </div>
    </div>
  </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  </body>
</html>
