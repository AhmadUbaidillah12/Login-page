<?php
session_start();
if (isset($_POST['login'])) {
  $username = $_POST['username'];
  $password = $_POST['password'];

  // Membuat koneksi ke database
  $dbhost = "localhost";
  $dbuser = "root";
  $dbpass = "";
  $dbname = "webdb";
  $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

  // Memeriksa apakah username dan password cocok
  $query = "SELECT * FROM admin WHERE username = '$username' AND password = '$password'";
  $result = mysqli_query($conn, $query);
  $count = mysqli_num_rows($result);

  // Jika cocok, redirect ke halaman index.html
  if ($count == 1) {
    $_SESSION['username'] = $username;
    header("location: index.html");
  } else {
    echo "Username atau password salah";
  }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/login.css">
  <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
  <title>Login - Admin</title>
</head>

<body>
  <div class="container" id="container">

    <div class="form-container register-container">
      <form action="#">
        <h1>Ga Jadi Login? Kembali ke Halaman Utama Aja</h1> 
        <button>Halaman Utama</button>
        <div class="social-container">
          <a href="#" class="social"><i class="ri-facebook-circle-fill"></i></a>
          <a href="#" class="social"><i class="ri-instagram-fill"></i></a>
          <a href="#" class="social"><i class="ri-twitter-fill"></i></a>
          <a href="#" class="social"><i class="ri-youtube-fill"></i></a>
        </div>
      </form>
    </div>


    <div class="form-container login-container">
      <form method="post" action="">
        <h1>Login</h1>
        <input type="text" name="username" placeholder="Username" required>
        <input type="password" name="password" placeholder="Password" required>
        <div class="content">
          <div class="checkbox">
            <input type="checkbox" name="checkbox" id="checkbox">
            <label>Remember me</label>
          </div>
          <div class="pass-link">
            <a href="#">forgot password</a>
          </div>
        </div>
        <button name="login">Login</button>
        <!-- <input type="submit" name="login" value="Login"> -->
        <div class="social-container">
          <a href="#" class="social"><i class="ri-facebook-circle-fill"></i></a>
          <a href="#" class="social"><i class="ri-instagram-fill"></i></a>
          <a href="#" class="social"><i class="ri-twitter-fill"></i></a>
          <a href="#" class="social"><i class="ri-youtube-fill"></i></a>
        </div>
      </form>
    </div>

    <div class="overlay-container">
      <div class="overlay">
        <div class="overlay-panel overlay-left">
          <h1 class="title">Hello <br> Friends</h1>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing.</p>
          <button class="ghost" id="login">Login <i class="ri-arrow-left-line"></i></button>
        </div>
        <div class="overlay-panel overlay-right">
          <h1 class="tittle">Halaman Utama<br> Kemenag Dalam Angka </h1>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut, dolorum?</p>
          <button class="ghost" id="register"> Halaman utama <i class="ri-arrow-right-line"></i></button>
        </div>
      </div>
    </div>
  </div>

  <script src="js/login.js"></script>
</body>

</html>