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
  <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css"> -->
  <!-- materialize icons -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

  <!-- CDN datatables -->
  <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.css">

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
      <a href="tambah.php" class="btn-floating btn-large waves-effect waves-light black"><i class="material-icons">add</i></a>
    </div>

    <table class="display" id="tableAnm">
      <thead>
        <tr class="orange darken-2">
          <th class="center">No</th>
          <th class="center">Image</th>
          <th>Nama MC</th>
          <th>Anime</th>
          <th>Pengarang</th>
          <th class="center">Rilis</th>
        </tr>
      </thead>
    </table>
  </div>

  <!-- script materialize -->
  <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
  <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
  <script>
    $(document).ready(function() {
      $('#tableAnm').DataTable({
        processing: true,
        serverSide: true,
        ajax: 'proses_anime.php'
      });
    });
  </script>
</body>

</html>