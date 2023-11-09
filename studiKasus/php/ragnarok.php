<?php
// Mohamad Egi Rahayu
// Universitas Pasundan
// Full Stack 01

require "functions.php";

$ragnarok = query("SELECT img, nama_komik, harga, pengarang.nama_pengarang FROM komik JOIN pengarang ON komik.pengarang_id = pengarang.id_pengarang WHERE nama_komik LIKE '%Record Of Ragnarok%'");
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
  <link rel="stylesheet" href="../css/style.css">

  <link rel="shortcut icon" href="../img/ER.png">
  <title>Record of Ragnarok</title>
</head>

<body>
  <h1 class="text-center mt-4 mb-4">Record of Ragnarok</h1>

  <div class="container">
    <div class="row row-cols-xl-5 row-cols-lg-4 row-cols-md-3 row-cols-sm-2 row-cols-1 justify-content-center">
      <?php foreach ($ragnarok as $ror) : ?>
        <div class="col mt-3">
          <div class="card">
            <img src="../img/<?= $ror['img']; ?>" class="card-img-top card_img" alt="<?= $ror['nama_komik']; ?>">

            <div class="card-body">
              <h1 class="card-title"><?= $ror['nama_komik']; ?></h1>
              <span class="card_price">Rp. <?= number_format($ror['harga'], 0, ',', '.'); ?></span>
              <p class="card-text"><?= $ror['nama_pengarang']; ?></p>
              <a href="#" class="btn btn-danger card_button">Details</a>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>

  <!-- JS Bootstrap -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>