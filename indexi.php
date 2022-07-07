<?php
include "koneksi.php";

if(isset($_POST['kirim'])){
mysqli_query($koneksi, "INSERT INTO kritik set  
nama= '$_POST[nama]',
email = '$_POST[email]',
phone = '$_POST[phone]',
pesan = '$_POST[pesan]'");


echo "Data barang baru telah tersimpan";

} 

$infor = mysqli_query($koneksi, "SELECT *FROM informasi ");
$rows = [];
while($row = mysqli_fetch_assoc($infor)){
    $rows[] = $row;
}

?>



<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />

    <!--Link Css-->

    <link rel="stylesheet" href="style.css" />

    <title>Perpustakaan Sulsel</title>
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
              <a class="nav-link" href="hero">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="projects">Information</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Contact</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!--Akhir Navbar-->

    <!--Jumbotron-->
    <section class="jumbotron text-center">
      <div class="hero">
        <img src="sulsel.png" alt="LogoSulsel" width="200" height="250 " />
        <h1 class="display-4">SULAWESI SELATAN</h1>
        <p class="lead mb-0">
          This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information. Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus mollitia saepe ipsa magni?
          Necessitatibus mollitia exercitationem qui at quae. Optio nobis, architecto ullam nisi doloribus quam cupiditate id placeat minus Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas, porro ipsum nisi, sed numquam
          doloremque exercitationem reiciendis quidem rerum temporibus et ratione ullam veritatis unde quasi. Animi sapiente quae aut.
        </p>

      </div>

      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path
          fill="#e2edff"
          fill-opacity="1"
          d="M0,224L40,218.7C80,213,160,203,240,218.7C320,235,400,277,480,282.7C560,288,640,256,720,240C800,224,880,224,960,202.7C1040,181,1120,139,1200,144C1280,149,1360,203,1400,229.3L1440,256L1440,0L1400,0C1360,0,1280,0,1200,0C1120,0,1040,0,960,0C880,0,800,0,720,0C640,0,560,0,480,0C400,0,320,0,240,0C160,0,80,0,40,0L0,0Z"
        ></path>
      </svg>
    </section>

    <!--Akhir Jumbotron-->

    <!--About-->

    <section id="about">
      <div class="container">
        <div class="row text-center mb-3">
          <div class="col">
            <h2>About Me</h2>
          </div>
        </div>
        <div class="row justify-content-center fs-5 text-center">
          <div class="col-4">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit dolor maiores molestias architecto at laborum id exercitationem, deserunt autem natus eveniet! Blanditiis similique illo perferendis quae, distinctio nulla odit nisi?
          </div>
          <div class="col-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem ullam assumenda maiores hic? Ea est tempora quasi nesciunt quisquam id reprehenderit, voluptates odio quo aperiam repellat a soluta ex at.</div>
        </div>
      </div>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path
          fill="#e2edff"
          fill-opacity="1"
          d="M0,192L40,192C80,192,160,192,240,186.7C320,181,400,171,480,144C560,117,640,75,720,74.7C800,75,880,117,960,128C1040,139,1120,117,1200,117.3C1280,117,1360,139,1400,149.3L1440,160L1440,320L1400,320C1360,320,1280,320,1200,320C1120,320,1040,320,960,320C880,320,800,320,720,320C640,320,560,320,480,320C400,320,320,320,240,320C160,320,80,320,40,320L0,320Z"
        ></path>
      </svg>
    </section>

    <!--Information-->

    <section class="portfolio bg-light" id="portfolio">
      <div class="container">
        <div class="row pt-4 mb-4">
          <div class="col text-center">
            <h2>Portfolio</h2>
          </div>
        </div>


        
        
        <div class="row">
          <?php foreach($rows as $info) : ?>
          <div class="col-md-4 mb-4">
            <div class="card">
              <img class="card-img-top" src="sulsel.png" alt="Card image cap">
              <div class="card-body">
                <h1 class= "text-center"><?= $info["Nama_Perpus"]; ?></h1>
                <p class="card-text"><?= $info["Deskripsi"]; ?></p>
              </div>
            </div>
          </div>
          <?php endforeach; ?> 
        </div>
      </div>
    </section>


    
    <!--Akhir  Information-->
    <!-- Contact -->
    <section class="contact" id="contact">
      <div class="container">
        <div class="row pt-4 mb-4">
          <div class="col text-center">
            <h2>Contact</h2>
          </div>
        </div>

        <div class="row justify-content-center">
          <div class="col-lg-4">
            <div class="card bg-primary text-white mb-4 text-center">
              <div class="card-body">
                <h5 class="card-title">Contact Me</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              </div>
            </div>
            
            <ul class="list-group mb-4">
              <li class="list-group-item"><h3>Location</h3></li>
              <li class="list-group-item">My Office</li>
              <li class="list-group-item">Jl. Setiabudhi No. 193, Bandung</li>
              <li class="list-group-item">West Java, Indonesia</li>
            </ul>
          </div>

          <div class="col-lg-6">
            
            <form action="" method = "post">
              <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" class="form-control" id="nama" name="nama">
              </div>
              <div class="form-group">
                <label for="email">Email</label>
                <input type="text" class="form-control" id="email" name="email">
              </div>
              <div class="form-group">
                <label for="phone">Phone Number</label>
                <input type="text" class="form-control" id="phone" name="phone">
              </div>
              <div class="form-group">
                <label for="message">Message</label>
                <textarea class="form-control" id="message" name="pesan" rows="3"></textarea>
              </div>
              <div class="form-group">
                <button type="submit" name="kirim"class="btn btn-primary">Kirim</button>
              </div>
            </form>

          </div>
        </div>
      </div>
      
    </section>


     <!-- footer -->
     <footer class="bg-dark text-white mt-5">
      <div class="container">
        <div class="row">
          <div class="col text-center">
            <p>Copyright Perpustakaan Sulsel &copy; 2018.</p>
          </div>
        </div>
      </div>
    </footer>


    <!--Akhir Section-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>



