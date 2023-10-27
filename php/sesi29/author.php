<?php
// Mohamad Egi Rahayu
// Universitas Pasundan
// Full Stack 01

include "config.php";
$author = mysqli_query($conn, "SELECT * FROM pengarang");
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
  <title>Author Anime</title>

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
    <h3 class="center">Author Anime</h3>

    <table class="striped">
      <tr class="orange darken-2">
        <th class="center">No</th>
        <th class="center">Image</th>
        <th>Nama Author</th>
        <th>Birthday</th>
      </tr>

      <?php $i = 1; ?>

      <?php foreach ($author as $auth) : ?>
        <tr class="grey darken-3 white-text">
          <td class="center"><?= $i; ?></td>
          <td class="center"><img src="img/<?= $auth['img']; ?>" width="100px"></td>
          <td><?= $auth['nama_pengarang']; ?></td>
          <td><?= date("d F Y", strtotime($auth['tanggal_lahir'])); ?></td>
        </tr>
        <?php $i++; ?>
      <?php endforeach; ?>
    </table>
  </div>

  <!-- script materialize -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</body>

</html>