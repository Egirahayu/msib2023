<?php
// Mohamad Egi Rahayu
// Universitas Pasundan
// Full Stack 01

require 'functions.php';

$id = $_GET['id'];
$anm = query("SELECT anime.id, nama_anime, anime.img, rilis, id_author, author.nama_author FROM anime JOIN author ON anime.id_author = author.id WHERE anime.id = $id")[0];
$author = query("SELECT author.id, nama_author, anime.id_author FROM author JOIN anime ON anime.id_author = author.id");

if (isset($_POST['update_anime'])) {
  if (update_anime($_POST) > 0) {
    echo "<script>
            alert('Data Successfully update!');
            document.location.href = 'anime.php';
          </script>";
  } else {
    echo "<script>
            alert('Data Failed to update!');
            document.location.href = 'anime.php';
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
  <title>Update Data Anime</title>

  <style>
    body {
      background-image: url(img/unsplash.jpg);
    }
  </style>
</head>

<body>
  <div class="container">
    <form action="" method="post" enctype="multipart/form-data">
      <input type="hidden" name="id" id="id" value="<?= $anm["id"] ?>">
      <div class="card-panel">
        <h5>Form Update Data Anime</h5>
        <div class="input-field">
          <input type="text" name="nama_anime" id="nama_anime" required value="<?= $anm["nama_anime"]; ?>">
          <label for="nama_anime">Anime</label>
        </div>
        <div class="input-field">
          <input type="text" name="rilis" id="rilis" required value="<?= $anm["rilis"]; ?>">
          <label for="rilis">Release</label>
        </div>
        <div class="input-field">
          <select class="browser-default" name="id_author">
            <option value="<?= $anm['id_author']; ?>" selected><?php echo $anm['nama_author']; ?></option>
            <?php foreach ($author as $auth) : ?>
              <?php if ($anm['id_author'] != $auth['id']) : ?>
                <option value="<?= $auth['id']; ?>"><?= $auth['nama_author']; ?></option>
              <?php endif; ?>
            <?php endforeach; ?>
          </select>
        </div>
        <div class="file-field input-field">
          <input type="hidden" name="gambar_lama" value="<?= $anm['img']; ?>">
          <div class="btn">
            <span>File</span>
            <input type="file" multiple name="gambar" class="gambar" onchange="previewImage()">
          </div>
          <div class="file-path-wrapper">
            <input class="file-path validate" type="text" placeholder="Upload Image">
          </div>
          <img src="img/<?= $anm["img"]; ?>" width="120px" style="display: block;" class="img-preview">
        </div>
        <button class="waves-effect waves-light skyblue darken-1 btn" type="submit" name="update_anime">Update Data!</button></a>
        <button class="waves-effect waves-light skyblue darken-1 btn" type="submit">
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