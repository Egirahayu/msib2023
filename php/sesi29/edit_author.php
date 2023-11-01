<?php
// Mohamad Egi Rahayu
// Universitas Pasundan
// Full Stack 01

include_once("config.php");
$id = $_GET['id'];

$auth =  mysqli_query($conn, "SELECT * FROM author WHERE id=$id");

while ($data = mysqli_fetch_array($auth)) {
  $nama_author = $data['nama_author'];
  $tgl_lahir = $data['tgl_lahir'];
  $img = $data['img'];
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- css materialize -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

  <link rel="shortcut icon" href="ER.png">
  <title>Edit Author Anime</title>

  <style>
    body {
      background-image: url(img/unsplash.jpg);
    }
  </style>
</head>

<body>
  <div class="container">
    <form action="proses_edit_author.php?id=<?= $id; ?>" method="post" enctype="multipart/form-data">
      <div class="card-panel">
        <h5>Form Ubah Data Main Character Anime</h5>
        <div class="input-field">
          <input type="text" name="nama_author" id="nama_author" required value="<?= $nama_author; ?>">
          <label for="nama_author">Nama</label>
        </div>
        <div class="input-field">
          <input type="date" name="tgl_lahir" id="tgl_lahir" required value="<?= $tgl_lahir; ?>">
          <label for="tgl_lahir">Tanggal Lahir</label>
        </div>
        <div class="file-field input-field">
          <div class="btn">
            <span>File</span>
            <input type="file" multiple name="gambar" class="gambar" onchange="previewImage()">
          </div>
          <div class="file-path-wrapper">
            <input class="file-path validate" type="text" placeholder="Upload Gambar">
          </div>
          <img src="img/<?= $img; ?>" width="120px" style="display: block;" class="img-preview">
        </div>
        <button class="waves-effect waves-light skyblue darken-1 btn" type="submit" name="ubah">Ubah Data!</button></a>
        <button class="waves-effect waves-light skyblue darken-1 btn" type="submit">
          <a href="author.php" style='text-decoration: none; color: white;'>Kembali</a>
        </button>
      </div>
    </form>
  </div>

  <!-- script materialize -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
  <script>
    function previewImage() {
      const gambar = document.querySelector('.gambar');
      const imgPreview = document.querySelector('.img-preview');

      const oFReader = new FileReader();
      oFReader.readAsDataURL(gambar.files[0]);

      oFReader.onload = function(oFREvent) {
        imgPreview.src = oFREvent.target.result;
      };
    };
  </script>
</body>

</html>