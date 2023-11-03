<?php
// Mohamad Egi Rahayu
// Universitas Pasundan
// Full Stack 01

require 'functions.php';

$id = $_GET['id'];
$char = query("SELECT characters.id, nama_char, characters.img, tgl_lahir, id_anime, anime.nama_anime FROM characters JOIN anime ON characters.id_anime = anime.id WHERE characters.id = $id")[0];
$anime = query("SELECT anime.id, nama_anime, characters.id_anime FROM anime JOIN characters ON characters.id_anime = anime.id");

if (isset($_POST['update_char'])) {
  if (update_char($_POST) > 0) {
    echo "<script>
            alert('Data Successfully update!');
            document.location.href = 'index.php';
          </script>";
  } else {
    echo "<script>
            alert('Data Failed to update!');
            document.location.href = 'index.php';
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
  <title>Update Data Character Anime</title>

  <style>
    body {
      background-image: url(img/unsplash.jpg);
    }
  </style>
</head>

<body>
  <div class="container">
    <form action="" method="post" enctype="multipart/form-data">
      <input type="hidden" name="id" id="id" value="<?= $char["id"] ?>">
      <div class="card-panel">
        <h5>Form Update Data Character Anime</h5>
        <div class="input-field">
          <input type="text" name="nama_char" id="nama_char" required value="<?= $char["nama_char"]; ?>">
          <label for="nama_char">Name Character</label>
        </div>
        <div class="input-field">
          <input type="date" name="tgl_lahir" id="tgl_lahir" required value="<?= $char["tgl_lahir"]; ?>">
          <label for="tgl_lahir">Birthday</label>
        </div>
        <div class="input-field">
          <select class="browser-default" name="id_anime">
            <option value="<?= $char['id_anime']; ?>" selected><?php echo $char['nama_anime']; ?></option>
            <?php foreach ($anime as $anm) : ?>
              <?php if ($char['id_anime'] != $anm['id']) : ?>
                <option value="<?= $anm['id']; ?>"><?= $anm['nama_anime']; ?></option>
              <?php endif; ?>
            <?php endforeach; ?>
          </select>
        </div>
        <div class="file-field input-field">
          <input type="hidden" name="gambar_lama" value="<?= $char['img']; ?>">
          <div class="btn">
            <span>File</span>
            <input type="file" multiple name="gambar" class="gambar" onchange="previewImage()">
          </div>
          <div class="file-path-wrapper">
            <input class="file-path validate" type="text" placeholder="Upload Image">
          </div>
          <img src="img/<?= $char["img"]; ?>" width="120px" style="display: block;" class="img-preview">
        </div>
        <button class="waves-effect waves-light skyblue darken-1 btn" type="submit" name="update_char">Update Data!</button></a>
        <button class="waves-effect waves-light skyblue darken-1 btn" type="submit">
          <a href="index.php" style='text-decoration: none; color: white;'>Back</a>
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