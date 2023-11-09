<?php
// Mohamad Egi Rahayu
// Universitas Pasundan
// Full Stack 01

require 'php/functions.php';

$news = query("SELECT id_komik, img, nama_komik, harga, pengarang.nama_pengarang FROM komik JOIN pengarang ON komik.pengarang_id = pengarang.id_pengarang WHERE tahun = 2023 LIMIT 0,5");
$books = query("SELECT id_komik, img, nama_komik, harga, pengarang.nama_pengarang FROM komik JOIN pengarang ON komik.pengarang_id = pengarang.id_pengarang GROUP BY nama_pengarang");
$onepiece = query("SELECT id_komik, img, nama_komik, harga, pengarang.nama_pengarang FROM komik JOIN pengarang ON komik.pengarang_id = pengarang.id_pengarang WHERE nama_komik LIKE '%One Piece%' LIMIT 0,5");
$naruto = query("SELECT id_komik, img, nama_komik, harga, pengarang.nama_pengarang FROM komik JOIN pengarang ON komik.pengarang_id = pengarang.id_pengarang WHERE nama_komik LIKE '%Naruto%' LIMIT 0,5");
$jujutsu = query("SELECT id_komik, img, nama_komik, harga, pengarang.nama_pengarang FROM komik JOIN pengarang ON komik.pengarang_id = pengarang.id_pengarang WHERE nama_komik LIKE '%Jujutsu Kaisen%' LIMIT 0,5");
$kimetsu = query("SELECT id_komik, img, nama_komik, harga, pengarang.nama_pengarang FROM komik JOIN pengarang ON komik.pengarang_id = pengarang.id_pengarang WHERE nama_komik LIKE '%Kimetsu No Yaiba%' LIMIT 0,5");
$ragnarok = query("SELECT id_komik, img, nama_komik, harga, pengarang.nama_pengarang FROM komik JOIN pengarang ON komik.pengarang_id = pengarang.id_pengarang WHERE nama_komik LIKE '%Record Of Ragnarok%' LIMIT 0,5");
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
  <link rel="stylesheet" href="css/style.css">

  <link rel="shortcut icon" href="img/ER.png">
  <title>ER-Book</title>
</head>

<body>
  <nav class="navbar navbar-expand-md bg-transparent sticky-top mynavbar">
    <div class="container">
      <a class="navbar-brand" href="index.php">
        <img src="img/ER.png" alt="Logo" width="47" height="33" class="d-inline-block align-text-top">
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
            <a class="nav-link" href="index.php">Home</a>
            <a class="nav-link" href="about.php">About</a>
            <a class="nav-link" href="login.php">Login</a>
          </div>
        </div>
      </div>
    </div>
  </nav>

  <div class="home" id="home">
    <div class="container">
      <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner slider">
          <div class="carousel-item active">
            <img src="https://source.unsplash.com/450x300?manga" class="d-block w-100" alt="Slider 1">
          </div>
          <div class="carousel-item">
            <img src="https://source.unsplash.com/450x300?books" class="d-block w-100" alt="Slider 2">
          </div>
          <div class="carousel-item">
            <img src="https://source.unsplash.com/450x300?book-cover" class="d-block w-100" alt="Slider 3">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>

      <div class="item mt-4 mb-4">
        <div class="header">
          <h1 class="mb-4">Last Publish</h1>
          <a href="php/last.php">View All</a>
        </div>

        <div class="row row-cols-xl-5 row-cols-lg-4 row-cols-md-3 row-cols-sm-2 row-cols-1 justify-content-center">
          <?php foreach ($news as $new) : ?>
            <div class="col">
              <div class="card">
                <img src="img/<?= $new['img']; ?>" class="card-img-top card_img" alt="<?= $new['nama_komik']; ?>">

                <div class="card-body">
                  <h1 class="card-title"><?= $new['nama_komik']; ?></h1>
                  <span class="card_price">Rp. <?= number_format($new['harga'], 0, ',', '.'); ?></span>
                  <p class="card-text"><?= $new['nama_pengarang']; ?></p>
                  <a href="php/details.php?id=<?= $new['id_komik']; ?>" class="btn btn-danger card_button">Details</a>
                </div>
              </div>
            </div>
          <?php endforeach; ?>
        </div>
      </div>

      <div class="list mb-4">
        <div class="header">
          <h1 class="mb-4">All Books</h1>
          <a href="php/all.php">View All</a>
        </div>
        <div class="row row-cols-xl-5 row-cols-lg-4 row-cols-md-3 row-cols-sm-2 row-cols-1 justify-content-center">
          <?php foreach ($books as $book) : ?>
            <div class="col">
              <div class="card">
                <img src="img/<?= $book['img']; ?>" class="card-img-top card_img" alt="<?= $book['nama_komik']; ?>">

                <div class="card-body">
                  <h1 class="card-title"><?= $book['nama_komik']; ?></h1>
                  <span class="card_price">Rp. <?= number_format($book['harga'], 0, ',', '.'); ?></span>
                  <p class="card-text"><?= $book['nama_pengarang']; ?></p>
                  <a href="php/details.php?id=<?= $book['id_komik']; ?>" class="btn btn-danger card_button">Details</a>
                </div>
              </div>
            </div>
          <?php endforeach; ?>
        </div>
      </div>

      <div class="OnePiece mb-4">
        <div class="header">
          <h1 class="mb-4">One Piece</h1>
          <a href="php/onepiece.php">View All</a>
        </div>
        <div class="row row-cols-xl-5 row-cols-lg-4 row-cols-md-3 row-cols-sm-2 row-cols-1 justify-content-center">
          <?php foreach ($onepiece as $op) : ?>
            <div class="col">
              <div class="card">
                <img src="img/<?= $op['img']; ?>" class="card-img-top card_img" alt="<?= $op['nama_komik']; ?>">

                <div class="card-body">
                  <h1 class="card-title"><?= $op['nama_komik']; ?></h1>
                  <span class="card_price">Rp. <?= number_format($op['harga'], 0, ',', '.'); ?></span>
                  <p class="card-text"><?= $op['nama_pengarang']; ?></p>
                  <a href="php/details.php?id=<?= $op['id_komik']; ?>" class="btn btn-danger card_button">Details</a>
                </div>
              </div>
            </div>
          <?php endforeach; ?>
        </div>
      </div>

      <div class="Naruto mb-4">
        <div class="header">
          <h1 class="mb-4">Naruto Shippuden</h1>
          <a href="php/naruto.php">View All</a>
        </div>
        <div class="row row-cols-xl-5 row-cols-lg-4 row-cols-md-3 row-cols-sm-2 row-cols-1 justify-content-center">
          <?php foreach ($naruto as $ns) : ?>
            <div class="col">
              <div class="card">
                <img src="img/<?= $ns['img']; ?>" class="card-img-top card_img" alt="<?= $ns['nama_komik']; ?>">

                <div class="card-body">
                  <h1 class="card-title"><?= $ns['nama_komik']; ?></h1>
                  <span class="card_price">Rp. <?= number_format($ns['harga'], 0, ',', '.'); ?></span>
                  <p class="card-text"><?= $ns['nama_pengarang']; ?></p>
                  <a href="php/details.php?id=<?= $ns['id_komik']; ?>" class="btn btn-danger card_button">Details</a>
                </div>
              </div>
            </div>
          <?php endforeach; ?>
        </div>
      </div>

      <div class="Jujutsu mb-4">
        <div class="header">
          <h1 class="mb-4">Jujutsu Kaisen</h1>
          <a href="php/jujutsu.php">View All</a>
        </div>
        <div class="row row-cols-xl-5 row-cols-lg-4 row-cols-md-3 row-cols-sm-2 row-cols-1 justify-content-center">
          <?php foreach ($jujutsu as $jk) : ?>
            <div class="col">
              <div class="card">
                <img src="img/<?= $jk['img']; ?>" class="card-img-top card_img" alt="<?= $jk['nama_komik']; ?>">

                <div class="card-body">
                  <h1 class="card-title"><?= $jk['nama_komik']; ?></h1>
                  <span class="card_price">Rp. <?= number_format($jk['harga'], 0, ',', '.'); ?></span>
                  <p class="card-text"><?= $jk['nama_pengarang']; ?></p>
                  <a href="php/details.php?id=<?= $jk['id_komik']; ?>" class="btn btn-danger card_button">Details</a>
                </div>
              </div>
            </div>
          <?php endforeach; ?>
        </div>
      </div>

      <div class="Kimetsu mb-4">
        <div class="header">
          <h1 class="mb-4">Kimetsu No Yaiba</h1>
          <a href="php/kimetsu.php">View All</a>
        </div>
        <div class="row row-cols-xl-5 row-cols-lg-4 row-cols-md-3 row-cols-sm-2 row-cols-1 justify-content-center">
          <?php foreach ($kimetsu as $kny) : ?>
            <div class="col">
              <div class="card">
                <img src="img/<?= $kny['img']; ?>" class="card-img-top card_img" alt="<?= $kny['nama_komik']; ?>">

                <div class="card-body">
                  <h1 class="card-title"><?= $kny['nama_komik']; ?></h1>
                  <span class="card_price">Rp. <?= number_format($kny['harga'], 0, ',', '.'); ?></span>
                  <p class="card-text"><?= $kny['nama_pengarang']; ?></p>
                  <a href="php/details.php?id=<?= $kny['id_komik']; ?>" class="btn btn-danger card_button">Details</a>
                </div>
              </div>
            </div>
          <?php endforeach; ?>
        </div>
      </div>

      <div class="Ragnarok mb-4">
        <div class="header">
          <h1 class="mb-4">Record Of Ragnarok</h1>
          <a href="php/ragnarok.php">View All</a>
        </div>
        <div class="row row-cols-xl-5 row-cols-lg-4 row-cols-md-3 row-cols-sm-2 row-cols-1 justify-content-center">
          <?php foreach ($ragnarok as $shuumatsu) : ?>
            <div class="col">
              <div class="card">
                <img src="img/<?= $shuumatsu['img']; ?>" class="card-img-top card_img" alt="<?= $shuumatsu['nama_komik']; ?>">

                <div class="card-body">
                  <h1 class="card-title"><?= $shuumatsu['nama_komik']; ?></h1>
                  <span class="card_price">Rp. <?= number_format($shuumatsu['harga'], 0, ',', '.'); ?></span>
                  <p class="card-text"><?= $shuumatsu['nama_pengarang']; ?></p>
                  <a href="php/details.php?id=<?= $shuumatsu['id_komik']; ?>" class="btn btn-danger card_button">Details</a>
                </div>
              </div>
            </div>
          <?php endforeach; ?>
        </div>
      </div>

      <div class="footer bg-black fs-5 text-center text-white">
        <p>Mohamad Egi Rahayu. Copyright &copy;2023.</p>
      </div>
    </div>
  </div>


  <!-- JS Lokal -->
  <script src="js/script.js"></script>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js'></script>
  <!-- JS Bootstrap -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>