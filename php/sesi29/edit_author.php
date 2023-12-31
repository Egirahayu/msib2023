<?php
// Mohamad Egi Rahayu
// Universitas Pasundan
// Full Stack 01

require 'functions.php';

$id = $_GET['id'];
$auth = query("SELECT * FROM author WHERE id = $id")[0];

if (isset($_POST['update_author'])) {
  if (update_author($_POST) > 0) {
    echo "<script>
            alert('Data Successfully update!');
            document.location.href = 'author.php';
          </script>";
  } else {
    echo "<script>
            alert('Data Failed to update!');
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
  <title>Update Data Author Anime</title>

  <style>
    body {
      background-image: url(img/unsplash.jpg);
    }
  </style>
</head>

<body>
  <div class="container">
    <form action="" method="post" enctype="multipart/form-data">
      <input type="hidden" name="id" id="id" value="<?= $auth["id"] ?>">
      <div class="card-panel">
        <h5>Form Update Data Author Anime</h5>
        <div class="input-field">
          <input type="text" name="nama_author" id="nama_author" required value="<?= $auth["nama_author"]; ?>">
          <label for="nama_author">Name Author</label>
        </div>
        <div class="input-field">
          <input type="date" name="tgl_lahir" id="tgl_lahir" required value="<?= $auth["tgl_lahir"]; ?>">
          <label for="tgl_lahir">Birthday</label>
        </div>
        <div class="file-field input-field">
          <input type="hidden" name="gambar_lama" value="<?= $auth['img']; ?>">
          <div class="btn">
            <span>File</span>
            <input type="file" multiple name="gambar" class="gambar" onchange="previewImage()">
          </div>
          <div class="file-path-wrapper">
            <input class="file-path validate" type="text" placeholder="Upload Image">
          </div>
          <img src="img/<?= $auth["img"]; ?>" width="120px" style="display: block;" class="img-preview">
        </div>
        <button class="waves-effect waves-light skyblue darken-1 btn" type="submit" name="update_author">Update Data!</button></a>
        <button class="waves-effect waves-light skyblue darken-1 btn" type="submit">
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