<?php 
    // require "session.php";
    require "koneksi.php";

    session_start();

    if( !isset($_SESSION["login"]) ) {
        header("Location: ../adminpanel/index.php");
        exit;
    }
    require '../functions.php';

    $queryKategori = mysqli_query($con, "SELECT * FROM kategori");
    $jumlahKategori = mysqli_num_rows($queryKategori);

    $queryProduk = mysqli_query($con, "SELECT * FROM produk");
    $jumlahProduk = mysqli_num_rows($queryProduk);

?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/darkmode.css" >
    
  </head>
  <style>
    .kotak {
        border: solid;
    }

    .summary-kategori {
        background-color: #0a6b4a;
        border-radius: 15px;
    }
    .summary-produk {
        background-color: #0a516b;
        border-radius: 15px;
        
    }

    #footer {
        /* position: absolute; */
        margin-top: 425px;
        bottom: 0;
        width: 100%;
    }

    



  </style>



  <body>
    <!-- navbar -->
    <?php require "navbar.php"; ?>
    <!-- navbar -->

    <!-- container -->
    <div class="container mt-5 breadcrumb">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item" aria-current="page">
                   <i class="fas fa-home text-black-60"></i> Home
                </li>
                
            </ol>
        </nav>
        <h2></h2>
        <div class="container mt-5">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-12 mb-3">
                    <div class="summary-kategori p-3">
                        <div class="row">
                            <div class="col-6">
                                <i class="fas fa-align-justify fa-7x text-black-60"></i>
                            </div>
                            <div class="col-6 text-white">
                                <h3 class="fs-2">Kategori</h3>
                                <p class="fs-4"><?php echo $jumlahKategori;?> Kategori</p>
                                <p><a href="kategori.php" class="text-decoration-none text-white">Lihat Detail</a></p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-12">
                    <div class="summary-produk p-3">
                        <div class="row">
                            <div class="col-6">
                                <i class="fas fa-box fa-7x text-black-60"></i>
                            </div>
                            <div class="col-6 text-white">
                                <h3 class="fs-2">Produk</h3>
                                <p class="fs-4"><?php echo $jumlahProduk; ?> Produk</p>
                                <p><a href="produk.php" class="text-decoration-none text-white">Lihat Detail</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- container -->

    <!-- Footer -->
    <footer class="bg-dark text-white p-4" id="footer">
      <div class="container">
        <div class="row mt-2">
          <div class="col-md-6 text-md-start text-center pt-2 pb-2">
            <a href="#" class="text-decoration-none">
              <img src="../assets/logo2.png" style="width: 40px" />
            </a>
            <span>Copyright @2023 | Created by <a href="#" class="text-decoration-none text-white fw-bold">Dzikri Setiawan</a> </span>
          </div>

          <div class="col-md-6 text-md-end text-center pt-2 pb-2">
            <a href="https://instagram.com/dzikrisee" target="_blank" class="text-decoration-none">
                <i class="fa fa-instagram fa-xl text-white " aria-hidden="true"></i>
            </a>
            <a href="#" class="text-decoration-none ms-1">
                <i class="fa fa-twitter fa-xl text-white" aria-hidden="true"></i>
            </a>
            <a href="#" class="text-decoration-none ms-1">
                <i class="fa fa-github fa-xl text-white" aria-hidden="true"></i>
            </a>
            
          </div>
        </div>
      </div>
    </footer>
    <!-- Akhir Footer -->
    <script src="../js/darkmode.js"></script>
    <script src="https://kit.fontawesome.com/84b8f8fd02.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>
</html>