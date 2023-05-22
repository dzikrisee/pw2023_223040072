<?php 
    // require "session.php";
    require "koneksi.php";

    $queryKategori = mysqli_query($con, "SELECT * FROM kategori");
    $jumlahKategori = mysqli_num_rows($queryKategori);

    $queryProduk = mysqli_query($con, "SELECT * FROM produk");
    $jumlahProduk = mysqli_num_rows($queryProduk);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kategori</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>

<body>
    <?php require "navbar.php"; ?>

    <div class="container mt-5">
        <!-- breadcrumb -->
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active" aria-current="page">
                   <a href="admin.php" class="text-decoration-none text-muted"><i class="fas fa-home "></i> Home</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">
                   Kategori
                </li>
            </ol>
        </nav>
        <!-- breadcrumb -->

        <div class="my-5 col-12 col-md-6">
            <h3>Tambah Kategori</h3>

            <form action="" method="post">
                <div>
                    <label for="kategori">Kategori</label>
                    <input type="text" id="kategori" name="kategori" placeholder="input nama kategori" class="form-control">
                </div>
                <div class="mt-2">
                    <button class="btn btn-primary" type="submit" name="simpan_kategori">Simpan</button>
                </div>
            </form>

            <?php 
                if(isset($_POST['simpan_kategori'])){
                    $kategori = htmlspecialchars($_POST['kategori']);

                    $queryExist = mysqli_query($con, "SELECT nama FROM kategori WHERE nama='$kategori'");
                    $jumlahDataKategoriBaru = mysqli_num_rows($queryExist);

                    if($jumlahDataKategoriBaru > 0){
                        ?>
                            <div class="alert alert-warning mt-3" role="alert">
                                Kategori sudah ada
                            </div>
                        <?php
                    }
                    else{
                        $querySimpan = mysqli_query($con, "INSERT INTO kategori (nama) VALUES ('$kategori')");
                        
                        if($querySimpan){
                            ?>
                                <div class="alert alert-success mt-3" role="alert">
                                    Kategori berhasil tersimpan
                                </div>

                                <meta http-equiv="refresh" content="1; url=kategori.php" />
                            <?php
                        }
                        else{
                            echo mysqli_error($con);
                        }
                    }

                }
            ?>
        </div>

        

        <div class="mt-3">
            <h2>List Kategori</h2>

            <div class="table-responsive mt-5">
                <table class="table">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Nama.</th>
                            <th>Action.</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                            if($jumlahKategori==0){
   
                        ?>
                            <tr>
                                <td colspan=3 class="text-center">Data Kategori tidak tersedia</td>
                            </tr>
                        <?php 
                            }
                            else{
                                $jumlah = 1;
                                while($data=mysqli_fetch_array($queryKategori)){

                                
                        ?>
                            <tr>
                                <td><?php echo $jumlah; ?></td>
                                <td><?php echo $data['nama']; ?></td>
                                <td>
                                    <a href="kategori-detail.php?p=<?php echo $data['id']; ?>" class="btn btn-info"><i class="fas fa-search"></i></a>
                                </td>
                            </tr>
                        <?php 
                            $jumlah++;
                            }
                        }
                        
                        ?>
                      
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-dark text-white p-4 mt-5" id="footer">
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
    <script src="https://kit.fontawesome.com/84b8f8fd02.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>