<?php
// Mohamad Egi Rahayu
// Universitas Pasundan
// Full Stack 01

if (!isset($_GET['id'])) {
  header("location: ../komik.php");
  exit;
}

require '../functions.php';

$id = $_GET['id'];

$komik = query("SELECT komik.id, img, nama_komik, deskripsi, harga, pengarang.nama_pengarang, penerbit.nama_penerbit
FROM komik 
JOIN pengarang ON komik.pengarang_id = pengarang.id
JOIN penerbit ON komik.penerbit_id = penerbit.id
WHERE komik.id = $id")[0];
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Css Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <!-- Css Lokal -->
  <link rel="stylesheet" href="../..//css/style.css">

  <link rel="shortcut icon" href="../..//img/ER.png">
  <title>ER-Book | Details</title>
</head>

<body style="background-image: url(../..//img/index-pw.jpg)">
  <div class="container">
    <h1 class="text-center text-white mt-4 mb-4">Detail Manga</h1>
    <div class="details mt-4 bg-success">
      <div class="row justify-content-between">
        <div class="col-3 mt-4 mb-4 mx-5">
          <img src="../../img/<?= $komik['img']; ?>" alt="<?= $komik['nama_komik']; ?>" width="300px">
        </div>

        <div class="col-7 mt-5 text-white" style="margin-right: 70px;">
          <h5 class="fw-bold" style="font-size: 35px; font-family: Arial; margin-top: 50px;"><?= $komik['nama_komik']; ?></h5>
          <p><small>By <?= $komik['nama_pengarang']; ?> (<?= $komik['nama_penerbit']; ?>)</small></p>
          <p style="text-align: justify;"><?= $komik['deskripsi']; ?></p>
          <p class="mt-3 fw-bold fs-4">Rp. <?= number_format($komik['harga'], 0, ',', '.'); ?></p>
          <a class="btn btn-danger mt-3 mb-5" href="../komik.php" role="button">Back to Dashboard</a>
        </div>
      </div>
    </div>
  </div>

  <!-- JS Lokal -->
  <script src="../../js/script.js"></script>
  <!-- JS Bootstrap -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>