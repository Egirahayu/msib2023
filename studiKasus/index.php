<?php
// Mohamad Egi Rahayu
// Universitas Pasundan
// Full Stack 01

require 'php/functions.php';

$news = query("SELECT komik.id, img, nama_komik, harga, pengarang.nama_pengarang FROM komik JOIN pengarang ON komik.pengarang_id = pengarang.id WHERE tahun = 2023 LIMIT 0,5");
$books = query("SELECT komik.id, img, nama_komik, harga, pengarang.nama_pengarang FROM komik JOIN pengarang ON komik.pengarang_id = pengarang.id GROUP BY nama_pengarang");
$onepiece = query("SELECT komik.id, img, nama_komik, harga, pengarang.nama_pengarang FROM komik JOIN pengarang ON komik.pengarang_id = pengarang.id WHERE nama_komik LIKE '%One Piece%' LIMIT 0,5");
$naruto = query("SELECT komik.id, img, nama_komik, harga, pengarang.nama_pengarang FROM komik JOIN pengarang ON komik.pengarang_id = pengarang.id WHERE nama_komik LIKE '%Naruto%' LIMIT 0,5");
$jujutsu = query("SELECT komik.id, img, nama_komik, harga, pengarang.nama_pengarang FROM komik JOIN pengarang ON komik.pengarang_id = pengarang.id WHERE nama_komik LIKE '%Jujutsu Kaisen%' LIMIT 0,5");
$kimetsu = query("SELECT komik.id, img, nama_komik, harga, pengarang.nama_pengarang FROM komik JOIN pengarang ON komik.pengarang_id = pengarang.id WHERE nama_komik LIKE '%Kimetsu No Yaiba%' LIMIT 0,5");
$ragnarok = query("SELECT komik.id, img, nama_komik, harga, pengarang.nama_pengarang FROM komik JOIN pengarang ON komik.pengarang_id = pengarang.id WHERE nama_komik LIKE '%Record Of Ragnarok%' LIMIT 0,5");
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
  <link rel="stylesheet" href="css/style.css">

  <link rel="shortcut icon" href="img/ER.png">
  <title>ER-Book</title>
</head>

<body style="background-image: url(img/index-pw.jpg)">
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
            <a class="nav-link" href="php/about.php">About</a>
            <a class="nav-link" href="php/login.php"><i class="bi bi-box-arrow-in-right"></i> Login</a>
          </div>
        </div>
      </div>
    </div>
  </nav>

  <div class="home">
    <div class="container">
      <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner slider">
          <div class="carousel-item active">
            <img src="img/Buku.jpg" height="750px" class="d-block w-100" alt="Slider 1">
          </div>
          <div class="carousel-item">
            <img src="img/Luffy.jpg" height="750px" class="d-block w-100" alt="Slider 2">
          </div>
          <div class="carousel-item">
            <img src="img/Manga.jpg" height="750px" class="d-block w-100" alt="Slider 3">
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
          <h1 class="mb-4 text-white">Last Publish</h1>
          <a href="php/last.php">View All</a>
        </div>

        <div class="row row-cols-xl-5 row-cols-lg-4 row-cols-md-3 row-cols-sm-2 row-cols-1 justify-content-center">
          <?php foreach ($news as $new) : ?>
            <div class="col">
              <div class="card card_item">
                <img src="img/<?= $new['img']; ?>" class="card-img-top card_img" alt="<?= $new['nama_komik']; ?>">

                <div class="card-body card_body">
                  <h1 class="card-title card_title"><?= $new['nama_komik']; ?></h1>
                  <span class="card_price">Rp. <?= number_format($new['harga'], 0, ',', '.'); ?></span>
                  <p class="card-text card_text"><?= $new['nama_pengarang']; ?></p>
                  <a href="php/details.php?id=<?= $new['id']; ?>" class="btn btn-danger card_button">Details</a>
                </div>
              </div>
            </div>
          <?php endforeach; ?>
        </div>
      </div>

      <div class="books mt-4">
        <h1 class="text-center mb-4 text-white">Books</h1>
        <div class="list">
          <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
            <li class="nav-item" role="presentation">
              <button class="nav-link active" id="pills-all-tab" data-bs-toggle="pill" data-bs-target="#pills-all" type="button" role="tab" aria-controls="pills-all" aria-selected="true">All</button>
            </li>
            <li class="nav-item" role="presentation">
              <button class="nav-link" id="pills-op-tab" data-bs-toggle="pill" data-bs-target="#pills-op" type="button" role="tab" aria-controls="pills-op" aria-selected="false">One Piece</button>
            </li>
            <li class="nav-item" role="presentation">
              <button class="nav-link" id="pills-ns-tab" data-bs-toggle="pill" data-bs-target="#pills-ns" type="button" role="tab" aria-controls="pills-ns" aria-selected="false">Naruto Shippuden</button>
            </li>
            <li class="nav-item" role="presentation">
              <button class="nav-link" id="pills-jk-tab" data-bs-toggle="pill" data-bs-target="#pills-jk" type="button" role="tab" aria-controls="pills-jk" aria-selected="false">Jujutsu Kaisen</button>
            </li>
            <li class="nav-item" role="presentation">
              <button class="nav-link" id="pills-kny-tab" data-bs-toggle="pill" data-bs-target="#pills-kny" type="button" role="tab" aria-controls="pills-kny" aria-selected="false">Kimetsu No Yaiba</button>
            </li>
            <li class="nav-item" role="presentation">
              <button class="nav-link" id="pills-ror-tab" data-bs-toggle="pill" data-bs-target="#pills-ror" type="button" role="tab" aria-controls="pills-ror" aria-selected="false">Record Of Ragnarok</button>
            </li>
          </ul>
        </div>
      </div>

      <div class="tab-content mb-4" id="pills-tabContent">
        <div class="tab-pane fade show active" id="pills-all" role="tabpanel" aria-labelledby="pills-all-tab" tabindex="0">
          <div class="header">
            <a href="php/all.php">View All</a>
          </div>
          <div class="row row-cols-xl-5 row-cols-lg-4 row-cols-md-3 row-cols-sm-2 row-cols-1 justify-content-center">
            <?php foreach ($books as $book) : ?>
              <div class="col">
                <div class="card card_item">
                  <img src="img/<?= $book['img']; ?>" class="card-img-top card_img" alt="<?= $book['nama_komik']; ?>">

                  <div class="card-body card_body">
                    <h1 class="card-title card_title"><?= $book['nama_komik']; ?></h1>
                    <span class="card_price">Rp. <?= number_format($book['harga'], 0, ',', '.'); ?></span>
                    <p class="card-text card_text"><?= $book['nama_pengarang']; ?></p>
                    <a href="php/details.php?id=<?= $book['id']; ?>" class="btn btn-danger card_button">Details</a>
                  </div>
                </div>
              </div>
            <?php endforeach; ?>
          </div>
        </div>
        <div class="tab-pane fade" id="pills-op" role="tabpanel" aria-labelledby="pills-op-tab" tabindex="0">
          <div class="header">
            <a href="php/onepiece.php">View All</a>
          </div>
          <div class="row row-cols-xl-5 row-cols-lg-4 row-cols-md-3 row-cols-sm-2 row-cols-1 justify-content-center">
            <?php foreach ($onepiece as $op) : ?>
              <div class="col">
                <div class="card card_item">
                  <img src="img/<?= $op['img']; ?>" class="card-img-top card_img" alt="<?= $op['nama_komik']; ?>">

                  <div class="card-body card_body">
                    <h1 class="card-title card_title"><?= $op['nama_komik']; ?></h1>
                    <span class="card_price">Rp. <?= number_format($op['harga'], 0, ',', '.'); ?></span>
                    <p class="card-text card_text"><?= $op['nama_pengarang']; ?></p>
                    <a href="php/details.php?id=<?= $op['id']; ?>" class="btn btn-danger card_button">Details</a>
                  </div>
                </div>
              </div>
            <?php endforeach; ?>
          </div>
        </div>
        <div class="tab-pane fade" id="pills-ns" role="tabpanel" aria-labelledby="pills-ns-tab" tabindex="0">
          <div class="header">
            <a href="php/naruto.php">View All</a>
          </div>
          <div class="row row-cols-xl-5 row-cols-lg-4 row-cols-md-3 row-cols-sm-2 row-cols-1 justify-content-center">
            <?php foreach ($naruto as $ns) : ?>
              <div class="col">
                <div class="card card_item">
                  <img src="img/<?= $ns['img']; ?>" class="card-img-top card_img" alt="<?= $ns['nama_komik']; ?>">

                  <div class="card-body card_body">
                    <h1 class="card-title card_title"><?= $ns['nama_komik']; ?></h1>
                    <span class="card_price">Rp. <?= number_format($ns['harga'], 0, ',', '.'); ?></span>
                    <p class="card-text card_text"><?= $ns['nama_pengarang']; ?></p>
                    <a href="php/details.php?id=<?= $ns['id']; ?>" class="btn btn-danger card_button">Details</a>
                  </div>
                </div>
              </div>
            <?php endforeach; ?>
          </div>
        </div>
        <div class="tab-pane fade" id="pills-jk" role="tabpanel" aria-labelledby="pills-jk-tab" tabindex="0">
          <div class="header">
            <a href="php/jujutsu.php">View All</a>
          </div>
          <div class="row row-cols-xl-5 row-cols-lg-4 row-cols-md-3 row-cols-sm-2 row-cols-1 justify-content-center">
            <?php foreach ($jujutsu as $jk) : ?>
              <div class="col">
                <div class="card card_item">
                  <img src="img/<?= $jk['img']; ?>" class="card-img-top card_img" alt="<?= $jk['nama_komik']; ?>">

                  <div class="card-body card_body">
                    <h1 class="card-title card_title"><?= $jk['nama_komik']; ?></h1>
                    <span class="card_price">Rp. <?= number_format($jk['harga'], 0, ',', '.'); ?></span>
                    <p class="card-text card_text"><?= $jk['nama_pengarang']; ?></p>
                    <a href="php/details.php?id=<?= $jk['id']; ?>" class="btn btn-danger card_button">Details</a>
                  </div>
                </div>
              </div>
            <?php endforeach; ?>
          </div>
        </div>
        <div class="tab-pane fade" id="pills-kny" role="tabpanel" aria-labelledby="pills-kny-tab" tabindex="0">
          <div class="header">
            <a href="php/kimetsu.php">View All</a>
          </div>
          <div class="row row-cols-xl-5 row-cols-lg-4 row-cols-md-3 row-cols-sm-2 row-cols-1 justify-content-center">
            <?php foreach ($kimetsu as $kny) : ?>
              <div class="col">
                <div class="card card_item">
                  <img src="img/<?= $kny['img']; ?>" class="card-img-top card_img" alt="<?= $kny['nama_komik']; ?>">

                  <div class="card-body card_body">
                    <h1 class="card-title card_title"><?= $kny['nama_komik']; ?></h1>
                    <span class="card_price">Rp. <?= number_format($kny['harga'], 0, ',', '.'); ?></span>
                    <p class="card-text card_text"><?= $kny['nama_pengarang']; ?></p>
                    <a href="php/details.php?id=<?= $kny['id']; ?>" class="btn btn-danger card_button">Details</a>
                  </div>
                </div>
              </div>
            <?php endforeach; ?>
          </div>
        </div>
        <div class="tab-pane fade" id="pills-ror" role="tabpanel" aria-labelledby="pills-ror-tab" tabindex="0">
          <div class="header">
            <a href="php/ragnarok.php">View All</a>
          </div>
          <div class="row row-cols-xl-5 row-cols-lg-4 row-cols-md-3 row-cols-sm-2 row-cols-1 justify-content-center">
            <?php foreach ($ragnarok as $ror) : ?>
              <div class="col">
                <div class="card card_item">
                  <img src="img/<?= $ror['img']; ?>" class="card-img-top card_img" alt="<?= $ror['nama_komik']; ?>">

                  <div class="card-body card_body">
                    <h1 class="card-title card_title"><?= $ror['nama_komik']; ?></h1>
                    <span class="card_price">Rp. <?= number_format($ror['harga'], 0, ',', '.'); ?></span>
                    <p class="card-text card_text"><?= $ror['nama_pengarang']; ?></p>
                    <a href="php/details.php?id=<?= $ror['id']; ?>" class="btn btn-danger card_button">Details</a>
                  </div>
                </div>
              </div>
            <?php endforeach; ?>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="footer text-white">
    <div class="container">
      <div class="row bg-black mt-4">
        <div class="col-3 mt-4 mb-4">
          <img src="img/ER-2.png" alt="ER-Books" width="45px">
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
            <p style="margin-left: 100px;"><a href="php/onepiece.php">One Piece</a></p>
            <p style="margin-left: 100px;"><a href="php/naruto.php">Naruto Shippuden</a></p>
            <p style="margin-left: 100px;"><a href="php/jujutsu.php">Jujutsu Kaisen</a></p>
            <p style="margin-left: 100px;"><a href="php/kimetsu.php">Kimetsu No Yaiba</a></p>
            <p style="margin-left: 100px;"><a href="php/ragnarok.php">Record of Ragnarok</a></p>
          </div>
        </div>
        <div class="col-4 mt-4 mb-4">
          <h4 class="">Site Map</h4>

          <div class="nav_map mt-4">
            <p><a href="index.php">Home</a></p>
            <p><a href="php/about.php">About</a></p>
            <p><a href="php/login.php"><i class="bi bi-box-arrow-in-right"></i> Login</a></p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- JS Lokal -->
  <script src="js/script.js"></script>
  <!-- JS Bootstrap -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>