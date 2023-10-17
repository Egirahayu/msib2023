<?php
// Mohamad Egi Rahayu
// Universitas Pasundan
// Full Stack 01

include_once("config.php");
$id = $_GET['id'];

$anm =  mysqli_query($conn, "SELECT * FROM anime WHERE id=$id");

while ($data = mysqli_fetch_array($anm)) {
  $nama = $data['nama'];
  $anime = $data['anime'];
  $pengarang = $data['pengarang'];
  $rilis = $data['rilis'];
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

  <link rel="shortcut icon" href="ER.png">
  <title>Tubes Pemrograman Web</title>

  <style>
    body {
      background-image: url(img/unsplash.jpg);
    }
  </style>
</head>

<body>
  <div class="container">
    <form action="proses_edit.php?id=<?= $id; ?>" method="post" enctype="multipart/form-data">
      <div class="card-panel">
        <h5>Form Ubah Data Main Character Anime</h5>
        <div class="input-field">
          <input type="text" name="nama" id="nama" required value="<?= $nama; ?>">
          <label for="nama">Nama</label>
        </div>
        <div class="input-field">
          <input type="text" name="anime" id="anime" required value="<?= $anime; ?>">
          <label for="anime">Anime</label>
        </div>
        <div class="input-field">
          <input type="text" name="pengarang" id="pengarang" required value="<?= $pengarang; ?>">
          <label for="pengarang">Pengarang</label>
        </div>
        <div class="input-field">
          <input type="text" name="rilis" id="rilis" required value="<?= $rilis; ?>">
          <label for="rilis">Rilis</label>
        </div>
        <button class="waves-effect waves-light skyblue darken-1 btn" type="submit" name="ubah">Ubah Data!</button></a>
        <button class="waves-effect waves-light skyblue darken-1 btn" type="submit">
          <a href="index.php" style='text-decoration: none; color: white;'>Kembali</a>
        </button>
      </div>
    </form>
  </div>

  <!-- script materialize -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</body>

</html>