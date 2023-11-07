<?php
// Mohamad Egi Rahayu
// Universitas Pasundan
// Full Stack 01

require 'php/functions.php';

$books = query("SELECT img, nama_komik, harga, pengarang.nama_pengarang FROM komik JOIN pengarang ON komik.pengarang_id = pengarang.id_pengarang ORDER BY tahun < 2023");
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
            <a class="nav-link" href="category.php">Category</a>
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
        <h1 class="mb-4 text-center">Last Publish</h1>
        <div id="carouselExampleCaptions" class="carousel carousel-dark slide" data-bs-ride="false">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <div class="card-group">
                <div class="card">
                  <img src="img/One Piece Volume 105.jpg" class="card-img-top" alt="One Piece 1">
                  <div class="card-body">
                    <h5 class="card-title">One Piece Vol. 105</h5>
                    <p class="card-text">Eiichiro Oda</p>
                    <a href="#" class="btn btn-danger">Details</a>
                    <h4 style="margin-top: -30px;">Rp. 150.000,00</h4>
                  </div>
                </div>
                <div class="card">
                  <img src="img/One Piece Volume 106.jpg" class="card-img-top" alt="One Piece 1">
                  <div class="card-body">
                    <h5 class="card-title">One Piece Vol. 106</h5>
                    <p class="card-text">Eiichiro Oda</p>
                    <a href="#" class="btn btn-danger">Details</a>
                    <h4 style="margin-top: -30px;">Rp. 150.000,00</h4>
                  </div>
                </div>
                <div class="card">
                  <img src="img/One Piece Volume 107.jpg" class="card-img-top" alt="One Piece 1">
                  <div class="card-body">
                    <h5 class="card-title">One Piece Vol. 107</h5>
                    <p class="card-text">Eiichiro Oda</p>
                    <a href="#" class="btn btn-danger">Details</a>
                    <h4 style="margin-top: -30px;">Rp. 150.000,00</h4>
                  </div>
                </div>
                <div class="card">
                  <img src="img/Jujutsu Kaisen Volume 22.jpg" class="card-img-top" alt="One Piece 1">
                  <div class="card-body">
                    <h5 class="card-title">Jujutsu Kaisen Vol. 22</h5>
                    <p class="card-text">Gege Akutami</p>
                    <a href="#" class="btn btn-danger">Details</a>
                    <h4 style="margin-top: -30px;">Rp. 150.000,00</h4>
                  </div>
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <div class="card-group">
                <div class="card">
                  <img src="img/Jujutsu Kaisen Volume 23.jpg" class="card-img-top" alt="One Piece 1">
                  <div class="card-body">
                    <h5 class="card-title">Jujutsu Kaisen Vol. 23</h5>
                    <p class="card-text">Gege Akutami</p>
                    <a href="#" class="btn btn-danger">Details</a>
                    <h4 style="margin-top: -30px;">Rp. 150.000,00</h4>
                  </div>
                </div>
                <div class="card">
                  <img src="img/Jujutsu Kaisen Volume 24.jpg" class="card-img-top" alt="One Piece 1">
                  <div class="card-body">
                    <h5 class="card-title">Jujutsu Kaisen Vol. 24</h5>
                    <p class="card-text">Gege Akutami</p>
                    <a href="#" class="btn btn-danger">Details</a>
                    <h4 style="margin-top: -30px;">Rp. 150.000,00</h4>
                  </div>
                </div>
                <div class="card">
                  <img src="img/Record of Ragnarok Volume 18.jpg" class="card-img-top" alt="One Piece 1">
                  <div class="card-body">
                    <h5 class="card-title">Record of Ragnarok Vol. 18</h5>
                    <p class="card-text">Shinya Umemura</p>
                    <a href="#" class="btn btn-danger">Details</a>
                    <h4 style="margin-top: -30px;">Rp. 150.000,00</h4>
                  </div>
                </div>
                <div class="card">
                  <img src="img/Record of Ragnarok Volume 19.jpg" class="card-img-top" alt="One Piece 1">
                  <div class="card-body">
                    <h5 class="card-title">Record of Ragnarok Vol. 19</h5>
                    <p class="card-text">Shinya Umemura</p>
                    <a href="#" class="btn btn-danger">Details</a>
                    <h4 style="margin-top: -30px;">Rp. 150.000,00</h4>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
      </div>

      <div class="list mb-4">
        <h1 class="mb-4 text-center">All Books</h1>
        <div class="row row-cols-lg-4 row-cols-md-3 row-cols-sm-2 row-cols-1 justify-content-center">
          <?php foreach ($books as $book) : ?>
            <div class="col mt-3">
              <div class="card" style="width: 250px">
                <img src="img/<?= $book['img']; ?>" class="card-img-top" alt="<?= $book['nama_pengarang']; ?>">
                <div class="card-body">
                  <h5 class="card-title"><?= $book['nama_komik']; ?></h5>
                  <p class="card-text"><?= $book['nama_pengarang']; ?></p>
                  <a href="#" class="btn btn-danger">Details</a>
                  <h4 style="margin-top: -30px;">Rp. <?= number_format($book['harga'], 0, ',', '.'); ?></h4>
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