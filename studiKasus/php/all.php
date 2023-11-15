<?php
// Mohamad Egi Rahayu
// Universitas Pasundan
// Full Stack 01

require "functions.php";

$books = query("SELECT komik.id, img, nama_komik, harga, pengarang.nama_pengarang FROM komik JOIN pengarang ON komik.pengarang_id = pengarang.id ORDER BY nama_komik ASC");
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Css Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <!-- Css Icon Bootstrap -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
  <!-- Css Icon Medsos -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <!-- Css Lokal -->
  <link rel="stylesheet" href="../css/style.css">

  <link rel="shortcut icon" href="../img/ER.png">
  <title>ER-Book | All Books</title>
</head>

<body style="background-image: url(../img/index-pw.jpg)">
  <nav class="navbar navbar-expand-md bg-transparent sticky-top mynavbar">
    <div class="container">
      <a class="navbar-brand" href="../index.php">
        <img src="../img/ER.png" alt="Logo" width="47" height="33" class="d-inline-block align-text-top">
        ER-Book</a>
      <button class="navbar-toggler border-0" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
        <div class="offcanvas-header">
          <h5 class="offcanvas-title" id="offcanvasNavbarLabel">ER-Book</h5>
          <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
          <div class="navbar-nav ms-auto">
            <a class="nav-link" href="../index.php">Home</a>
            <a class="nav-link" href="about.php">About</a>
            <a class="nav-link" href="login.php"><i class="bi bi-box-arrow-in-right"></i> Login</a>
          </div>
        </div>
      </div>
    </div>
  </nav>

  <div class="container">
    <h1 class="text-center text-white mb-4">All Books</h1>
    <div class="row row-cols-xl-5 row-cols-lg-4 row-cols-md-3 row-cols-sm-2 row-cols-1 justify-content-center">
      <?php foreach ($books as $book) : ?>
        <div class="col mt-3">
          <div class="card card_item">
            <img src="../img/<?= $book['img']; ?>" class="card-img-top card_img" alt="<?= $book['nama_komik']; ?>">

            <div class="card-body card_body">
              <h1 class="card-title card_title"><?= $book['nama_komik']; ?></h1>
              <span class="card_price">Rp. <?= number_format($book['harga'], 0, ',', '.'); ?></span>
              <p class="card-text card_text"><?= $book['nama_pengarang']; ?></p>
              <a href="details.php?id=<?= $book['id']; ?>" class="btn btn-danger card_button">Details</a>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>

  <div class="footer bg-black text-white">
    <div class="container">
      <div class="row mt-4">
        <div class="col-3 mt-4 mb-4">
          <img src="../img/ER-2.png" alt="ER-Books" width="45px">
          <span class="mx-2 fs-4 fw-bold">ER-Book</span>
          <p class="mt-3" style="text-align: justify;">ER-Book is an Anime comic book store or commonly called Manga from various Anime for Anime lovers.</p>
          <div class="medsos">
            <a href="https://github.com/Egirahayu"><i class="fab fa-github"></i></a>
            <a href="#"><i class="fab fa-facebook-f"></i></a>
            <a href="#"><i class="fab fa-instagram"></i></a>
            <a href="#"><i class="fab fa-linkedin-in"></i></a>
          </div>
        </div>
        <div class="col-5 mt-4 mb-4">
          <h4 style="margin-left: 100px;">Book Category</h4>

          <div class="category mt-4">
            <p style="margin-left: 100px;"><a href="onepiece.php">One Piece</a></p>
            <p style="margin-left: 100px;"><a href="naruto.php">Naruto Shippuden</a></p>
            <p style="margin-left: 100px;"><a href="jujutsu.php">Jujutsu Kaisen</a></p>
            <p style="margin-left: 100px;"><a href="kimetsu.php">Kimetsu No Yaiba</a></p>
            <p style="margin-left: 100px;"><a href="ragnarok.php">Record of Ragnarok</a></p>
          </div>
        </div>
        <div class="col-4 mt-4 mb-4">
          <h4 class="">Site Map</h4>

          <div class="nav_map mt-4">
            <p><a href="../index.php">Home</a></p>
            <p><a href="about.php">About</a></p>
            <p><a href="login.php"><i class="bi bi-box-arrow-in-right"></i> Login</a></p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="footer-bottom bg-secondary text-center text-white" style="height: 30px; font-size: 20px;">
    <div class="container">
      <p>Mohamad Egi Rahayu. Copyright &copy;2023</p>
    </div>
  </div>

  <!-- JS Lokal -->
  <script src="../js/script.js"></script>
  <!-- JS Bootstrap -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>