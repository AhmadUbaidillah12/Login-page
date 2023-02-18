<?php
// Koneksi ke database
$host = 'localhost';
$username = 'root';
$password = '';
$database = 'webdb';
$koneksi = mysqli_connect($host, $username, $password, $database);

// Memproses data form
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $judul = $_POST['judul'];
  $tanggal = $_POST['date'];
  $isi_konten = $_POST['content'];

  // Memproses file gambar
  $gambar = $_FILES['image']['name'];
  $tmp_name = $_FILES['image']['tmp_name'];
  $target_dir = 'img/';
  $target_file = $target_dir . basename($gambar);
  $image_type = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

  // Memeriksa apakah file yang diupload adalah file gambar
  $check = getimagesize($tmp_name);
  if ($check === false) {
    echo 'File yang diupload bukan file gambar.';
    exit();
  }

  // Menyimpan data ke database
  $sql = "INSERT INTO blog (judul, gambar, tanggal, isi_konten) VALUES ('$judul', '$gambar', '$tanggal', '$isi_konten')";
  if (mysqli_query($koneksi, $sql)) {
    // Jika data berhasil disimpan ke database, pindahkan file gambar ke folder uploads
    move_uploaded_file($tmp_name, $target_file);
    echo 'Data berhasil disimpan.';
  } else {
    echo 'Terjadi kesalahan: ' . mysqli_error($koneksi);
  }
}
?>
