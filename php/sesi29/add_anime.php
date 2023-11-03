<?php
// Mohamad Egi Rahayu
// Universitas Pasundan
// Full Stack 01

require 'functions.php';

if (isset($_POST['add_anime'])) {
  if (add_anime($_POST) > 0) {
    echo "<script>
            alert('Data Added successfully!');
            document.location.href = 'anime.php';
          </script>";
  } else {
    echo "<script>
            alert('Data Failed to add!');
            document.location.href = 'anime.php';
          </script>";
  }
}

$author = query("SELECT * FROM author");
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
  <title>Add Data Anime</title>

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
        <h5>Form Add Data Anime</h5>
        <div class="input-field">
          <input type="text" name="nama_anime" id="nama_anime" class="validate" autocomplete="off">
          <label for="nama_anime">Anime</label>
        </div>
        <div class="input-field">
          <input type="text" name="rilis" id="rilis" autocomplete="off">
          <label for="rilis">Release</label>
        </div>
        <div class="input-field">
          <select class="browser-default" name="id_author">
            <option selected>Author</option>
            <?php foreach ($author as $auth) : ?>
              <option value="<?= $auth['id']; ?>"><?= $auth['nama_author']; ?></option>
            <?php endforeach; ?>
          </select>
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
        <button class="waves-effect waves-light orange darken-4 btn" type="submit" name="add_anime">Add Data!</button></a>
        <button class="waves-effect waves-light orange darken-4 btn" type="submit">
          <a href="anime.php" style='text-decoration: none; color: white;'>Back</a>
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