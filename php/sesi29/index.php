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

  <link rel="shortcut icon" href="img/ER.png">
  <title>Main Character Anime</title>

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

    <table class="striped">
      <tr class="orange darken-2">
        <th class="center">No</th>
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