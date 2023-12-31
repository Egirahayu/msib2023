<?php
// Mohamad Egi Rahayu
// Universitas Pasundan
// Full Stack 01

require 'functions.php';

$character = query("SELECT characters.id, characters.img, nama_char, tgl_lahir, anime.nama_anime FROM characters JOIN anime ON characters.id_anime = anime.id");
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- script jquery -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <!-- css datatable -->
  <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.css" />
  <!-- script datatable -->
  <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.js"></script>
  <!-- css materialize -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
  <!-- materialize icons -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

  <link rel="shortcut icon" href="img/ER.png">
  <title>Character Anime</title>

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
        <a href="index.php" class="brand-logo" style="padding-left: 15px;">Egi Rahayu</a>
        <ul id="nav-mobile" class="right hide-on-med-and-down">
          <li><a href="index.php">Character Anime</a></li>
          <li><a href="anime.php">Anime</a></li>
          <li><a href="author.php">Author Anime</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <div class="container">
    <h3 class="center">Character Anime</h3>

    <div class="add">
      <a href="add_char.php" class="btn-floating btn-large waves-effect waves-light black mb-5"><i class="material-icons">add</i></a>
    </div>

    <table id="char" class="striped display">
      <thead>
        <tr class="orange darken-2">
          <th>No</th>
          <th>Opsi</th>
          <th>Image</th>
          <th>Nama Character</th>
          <th>Birthday</th>
          <th>Anime</th>
        </tr>
      </thead>

      <?php foreach ($character as $char) : ?>
        <tbody>
          <tr class="grey darken-3 white-text">
            <td class="center"><?= $char['id']; ?></td>
            <td class="center">
              <a href="edit_char.php?id=<?= $char['id']; ?>" class="waves-effect waves-light blue darken-2 btn">Edit</a>
              <a href="delete_char.php?id=<?= $char['id']; ?>" class="waves-effect waves-light red darken-2 btn" onclick="return confirm('Hapus Data?')">Delete</a>
            </td>
            <td class="center"><img src="img/<?= $char['img']; ?>" width="100px"></td>
            <td><?= $char['nama_char']; ?></td>
            <td><?= date("d F", strtotime($char['tgl_lahir'])); ?></td>
            <td><?= $char['nama_anime']; ?></td>
          </tr>
        </tbody>
      <?php endforeach; ?>
    </table>
  </div>

  <!-- script materialize -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

  <script>
    $(document).ready(function() {
      $('#char').DataTable();
    });
  </script>
</body>

</html>