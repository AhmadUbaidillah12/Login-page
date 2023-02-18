<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/blog.css">
    <title>Blog!</title>
</head>
<body>
  <?php
    // Membuat koneksi ke database
    $dbhost = "localhost";
    $dbuser = "root";
    $dbpass = "";
    $dbname = "webdb";
    $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

    // Mengambil data blog dari tabel "blog"
    $query = "SELECT * FROM blog";
    $result = mysqli_query($conn, $query);

    // Menampilkan data blog ke dalam halaman
    while ($row = mysqli_fetch_array($result)) {
      echo "<div class='blog-post'>";
      echo "<h2 class='blog-title'>" . $row['judul'] . "</h2>";
      echo "<p class='blog-meta'>" . $row['tanggal'] . "</p>";
      echo "<img class='blog-image' src='img/" . $row['gambar'] . "'>";
      echo "<p class='blog-content'>" . $row['isi_konten'] . "</p>";
      echo "</div>";
    }
  ?>
</body>
</html>