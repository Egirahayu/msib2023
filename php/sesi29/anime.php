<?php
// Mohamad Egi Rahayu
// Universitas Pasundan
// Full Stack 01

require 'functions.php';

$anime = query("SELECT anime.id, anime.img, nama_anime, rilis, author.nama_author FROM anime JOIN author ON anime.id_author = author.id");
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- css materialize -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
  <!-- materialize icons -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

  <link rel="shortcut icon" href="img/ER.png">
  <title>Anime</title>

  <style>
    @font-face {
      font-family: 'Kaushan-Script';
      src: url('font/KaushanScript-Regular.otf');
    }

    body {
      background-image: url(img/unsplash.jpg);
    }

    .brand-logo {
      font-family: 'Kaushan-Script';
    }

    .add {
      margin-bottom: 10px;
    }
  </style>
</head>

<body>
  <nav class="blue darken-4">
    <div class="nav-wrapper">
      <div class="container">
        <img src="img/ER-2.png" width="60px" height="50px" style="padding-top: 10px;">
        <a href="" class="brand-logo" style="padding-left: 15px;">Egi Rahayu</a>
        <ul id="nav-mobile" class="right hide-on-med-and-down">
          <li><a href="index.php">Character Anime</a></li>
          <li><a href="anime.php">Anime</a></li>
          <li><a href="author.php">Author Anime</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <div class="container">
    <h3 class="center">Anime</h3>

    <div class="add">
      <a href="add_anime.php" class="btn-floating btn-large waves-effect waves-light black mb-5"><i class="material-icons">add</i></a>
    </div>

    <table class="striped">
      <tr class="orange darken-2">
        <th class="center">No</th>
        <th class="center">Opsi</th>
        <th class="center">Image</th>
        <th>Anime</th>
        <th>Release</th>
        <th>Author</th>
      </tr>

      <?php $i = 1; ?>

      <?php foreach ($anime as $anm) : ?>
        <tr class="grey darken-3 white-text">
          <td class="center"><?= $i; ?></td>
          <td class="center">
            <a href="edit_anime.php?id=<?= $anm['id']; ?>" class="waves-effect waves-light blue darken-2 btn">Edit</a>
            <a href="delete_anime.php?id=<?= $anm['id']; ?>" class="waves-effect waves-light red darken-2 btn" onclick="return confirm('Hapus Data?')">Delete</a>
          </td>
          <td class="center"><img src="img/<?= $anm['img']; ?>" width="100px"></td>
          <td><?= $anm['nama_anime']; ?></td>
          <td><?= $anm['rilis']; ?></td>
          <td><?= $anm['nama_author']; ?></td>
        </tr>
        <?php $i++; ?>
      <?php endforeach; ?>
    </table>
  </div>

  <!-- script materialize -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</body>

</html>