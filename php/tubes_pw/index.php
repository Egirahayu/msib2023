<?php
// Mohamad Egi Rahayu
// Universitas Pasundan
// Full Stack 01

include "config.php";
$anime = mysqli_query($conn, "SELECT * FROM anime");
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
  <title>Tubes Pemrograman Web</title>

  <style>
    body {
      background-image: url(img/unsplash.jpg);
    }

    .add {
      margin-bottom: 10px;
    }
  </style>
</head>

<body>
  <div class="container">
    <h3 class="center">Main Character (MC) Anime</h3>

    <div class="add">
      <a href="tambah.php" class="btn-floating btn-large waves-effect waves-light black mb-5"><i class="material-icons">add</i></a>
    </div>

    <table class="striped">
      <tr class="orange darken-2">
        <th class="center">No</th>
        <th class="center">Opsi</th>
        <th class="center">Image</th>
        <th>Nama MC</th>
        <th>Anime</th>
        <th>Pengarang</th>
        <th class="center">Rilis</th>
      </tr>

      <?php $i = 1; ?>

      <?php foreach ($anime as $anm) : ?>
        <tr class="grey darken-3 white-text">
          <td class="center"><?= $i; ?></td>
          <td class="center">
            <a href="edit.php?id=<?= $anm['id']; ?>" class="waves-effect waves-light blue darken-2 btn">Edit</a>
            <a href="delete.php?id=<?= $anm['id']; ?>" class="waves-effect waves-light red darken-2 btn" onclick="return confirm('Hapus Data?')">Delete</a>
          </td>
          <td class="center"><img src="img/<?= $anm['img']; ?>" width="100px"></td>
          <td><?= $anm['nama']; ?></td>
          <td><?= $anm['anime']; ?></td>
          <td><?= $anm['pengarang']; ?></td>
          <td class="center"><?= $anm['rilis']; ?></td>
        </tr>
        <?php $i++; ?>
      <?php endforeach; ?>
    </table>
  </div>

  <!-- script materialize -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</body>

</html>