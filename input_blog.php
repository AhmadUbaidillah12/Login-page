<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/input.css">
    <title>Input Blog - Admin</title>
</head>
<body>
<h1>Input Blog</h1>
    <form method="POST" action="submit_blog.php" enctype="multipart/form-data">
      <label for="judul">Judul:</label>
      <input type="text" id="judul" name="judul" required>
      <br>
      <label for="image">Gambar:</label>
      <input type="file" id="image" name="image" accept="image/*" required>
      <br>
      <label for="date">Tanggal:</label>
      <input type="date" id="date" name="date" required>
      <br>
      <label for="content">Isi Konten:</label>
      <textarea id="content" name="content" required></textarea>
      <br>
      <input type="submit" value="Simpan">
    </form>
</body>
</html>