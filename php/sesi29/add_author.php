<?php
// Mohamad Egi Rahayu
// Universitas Pasundan
// Full Stack 01

require 'functions.php';

if (isset($_POST['add_author'])) {
  if (add_author($_POST) > 0) {
    echo "<script>
            alert('Data Added successfully!');
            document.location.href = 'author.php';
          </script>";
  } else {
    echo "<script>
            alert('Data Failed to add!');
            document.location.href = 'author.php';
          </script>";
  }
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

  <link rel="shortcut icon" href="img/ER.png">
  <title>Add Data Author Anime</title>

  <style>
    body {
      background-image: url(img/unsplash.jpg);
    }
  </style>
</head>

<body>
  <div class="container">
    <form action="" method="post" enctype="multipart/form-data">
      <div class="card-panel">
        <h5>Form Add Data Author Anime</h5>
        <div class="input-field">
          <input type="text" name="nama_author" id="nama_author" class="validate" autocomplete="off">
          <label for="nama_author">Name Author</label>
        </div>
        <div class="input-field">
          <input type="date" name="tgl_lahir" id="tgl_lahir" autocomplete="off">
          <label for="tgl_lahir">Birthday</label>
        </div>
        <div class="file-field input-field">
          <div class="btn">
            <span>File</span>
            <input type="file" multiple name="gambar" class="gambar" onchange="previewImage()">
          </div>
          <div class="file-path-wrapper">
            <input class="file-path validate" type="text" placeholder="Upload Image">
          </div>
          <img src="img/nophoto.jpg" width="120px" style="display: block;" class="img-preview">
        </div>
        <button class="waves-effect waves-light orange darken-4 btn" type="submit" name="add_author">Add Data!</button></a>
        <button class="waves-effect waves-light orange darken-4 btn" type="submit">
          <a href="author.php" style='text-decoration: none; color: white;'>Back</a>
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