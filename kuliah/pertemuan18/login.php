<?php 
session_start();
require 'functions.php';

// cek cookie
if( isset($_COOKIE['id']) && isset($_COOKIE['key']))  {
    $id = $_COOKIE['id'];
    $key = $_COOKIE['key'];

    // ambil username berdasarkan id
    $result = mysqli_query($conn, "SELECT username FROM user WHERE id = $id");
    $row = mysqli_fetch_assoc($result);

    // cek cookie dan username
    if( $key === hash('sha256', $row['username']) ) {
        $_SESSION['login'] = true;
    }
}

if( isset($_SESSION["login"]) ) {
    header("Location: index.php");
    exit;
}



if( isset($_POST["login"]) ) {

    $username = $_POST["username"];
    $password = $_POST["password"];

    $result = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username'");

    // cek username
    if( mysqli_num_rows($result) === 1 ) {

        // cek password
        $row = mysqli_fetch_assoc($result);
        if( password_verify($password, $row["password"]) ) {
            // set session
            $_SESSION["login"] = true;

            // cek remember me
            if( isset($_POST["remember"]) ) {
                // buat cookie
                setcookie('id', $row['id'], time() + 60);
                setcookie('key', hash('sha256', $row['username']),
            time()+60 );
            }

            header("Location: index.php");
            exit;
        }
    }

    $error = true;
}


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Login</title>
</head>
<body>
    

    <h1>Halaman Login</h1>

    <?php if( isset($error) ) : ?>
        <p style="color: red; font-style: italic;">Username / Password Salah !</p>
    <?php endif; ?>

    <form action="" method="post">

    //
    <div class="container">
      <form class="form-container">
        <div class="text-center mb-3">
          <div class="row align-items-start">
            <div class="col">
              <h3>
                <a class="navbar-brand" href="#">
                  <img src="assets/logo.png" alt="Logo" width="25" height="25" class="" />
                  Jo.<strong>Store</strong>
                </a>
              </h3>
            </div>
            <div class="col"></div>
            <div class="col text-end">
              <button type="button" class="btn-close" aria-label="Close" onclick="location.href='index.php'"></button>
            </div>
          </div>
        </div>

        <div class="text-center mb-3">
          <h4>Masuk</h4>
        </div>

        <div class="mb-3">
          <label for="username" class="form-label textForm">Email</label>
          <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1"><i class="fa fa-envelope-o" aria-hidden="true"></i></span>
            <input type="text" name="username" class="form-control" id="username" placeholder="Masukan Username" />
          </div>
        </div>
        <div class="mb-3">
          <label for="password" class="form-labe textForml">Password</label>
          <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1"><i class="fa fa-unlock-alt" aria-hidden="true"></i></span>
            <input type="password" name="password" class="form-control" id="password" placeholder="Masukan Password" />
          </div>
        </div>

        <div style="margin-top: -13px" class="text-end mb-5">
          <a href="" class="textForm text-hover">Lupa Password ?</a>
        </div>

        <div class="d-grid">
          <button type="submit" name="login" class="btn btn-outline-primary textForm">Masuk</button>
        </div>
        <div class="mt-1">
          <span class="textForm">Belum punya akun ? <a href="register2.html" class="textForm text-hover">Daftar</a></span>
        </div>
      </form>
    </div>
    <script src="https://kit.fontawesome.com/84b8f8fd02.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>



    
        <!-- <ul>
            <li>
                <label for="username">Username :</label>
                <input type="text" name="username" id="username">
            </li>
            <li>
                <label for="password">Password :</label>
                <input type="password" name="password" id="password">
            </li>
            <li>
                <input type="checkbox" name="remember" id="remember">
                <label for="remember">Remember me :</label>
                
            </li>
            <li>
                <button type="submit" name="login">Login</button>
            </li>
        </ul> -->
    </form>
</body>
</html>