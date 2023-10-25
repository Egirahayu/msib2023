<?php
// Mohamad Egi Rahayu
// Universitas Pasundan
// Full Stack 01
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
  <title>Tubes Pemrograman Web</title>

  <style>
    body {
      background-image: url(img/unsplash.jpg);
    }
  </style>
</head>

<body>
  <div class="container">
    <form action="proses.php" method="post" enctype="multipart/form-data">
      <div class="card-panel">
        <h5>Form Tambah Data Main Character Anime</h5>
        <div class="input-field">
          <input type="text" name="nama" id="nama" class="validate" autocomplete="off">
          <label for="nama">Nama</label>
        </div>
        <div class="input-field">
          <input type="text" name="anime" id="anime" autocomplete="off">
          <label for="anime">Anime</label>
        </div>
        <div class="input-field">
          <input type="text" name="pengarang" id="pengarang">
          <label for="pengarang">Pengarang</label>
        </div>
        <div class="input-field">
          <input type="text" name="rilis" id="rilis" autocomplete="off">
          <label for="rilis">Rilis</label>
        </div>
        <div class="file-field input-field">
          <div class="btn">
            <span>File</span>
            <input type="file" multiple name="gambar" class="gambar" onchange="previewImage()">
          </div>
          <div class="file-path-wrapper">
            <input class="file-path validate" type="text" placeholder="Upload Gambar">
          </div>
          <img src="img/nophoto.jpg" width="120px" style="display: block;" class="img-preview">
        </div>
        <button class="waves-effect waves-light orange darken-4 btn" type="submit" name="submit">Tambah Data!</button></a>
        <button class="waves-effect waves-light orange darken-4 btn" type="submit">
          <a href="index.php" style='text-decoration: none; color: white;'>Kembali</a>
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