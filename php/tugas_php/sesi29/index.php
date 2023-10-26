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

  <!-- CSS Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

  <link rel="shortcut icon" href="img/ER.png">
  <title>Main Character Anime</title>

  <style>
    body {
      background-image: url(img/unsplash.jpg);
    }
  </style>
</head>

<body>
  <div class="container">
    <h3 class="text-center p-3">Main Character (MC) Anime</h3>

    <table class="table table-hover">
      <tr class="table-warning">
        <th class="text-center">No</th>
        <th class="text-center">Opsi</th>
        <th class="text-center">Image</th>
        <th>Nama MC</th>
        <th>Anime</th>
        <th>Pengarang</th>
        <th class="text-center">Rilis</th>
      </tr>

      <?php $i = 1; ?>

      <?php foreach ($anime as $anm) : ?>
        <tr class="grey darken-3 white-text">
          <td class="text-center table-light"><?= $i; ?></td>
          <td class="text-center table-light">
            <a href="edit.php?id=<?= $anm['id']; ?>" class="btn btn-primary">Edit</a>
            <a href="delete.php?id=<?= $anm['id']; ?>" class="btn btn-danger" onclick="return confirm('Hapus Data?')">Delete</a>
          </td>
          <td class="text-center table-light"><img src="img/<?= $anm['img']; ?>" width="100px"></td>
          <td class="table-light"><?= $anm['nama']; ?></td>
          <td class="table-light"><?= $anm['anime']; ?></td>
          <td class="table-light"><?= $anm['pengarang']; ?></td>
          <td class="text-center table-light"><?= $anm['rilis']; ?></td>
        </tr>
        <?php $i++; ?>
      <?php endforeach; ?>
    </table>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>