<?php
// Mohamad Egi Rahayu
// Universitas Pasundan
// Full Stack 01
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
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
    <title>ER-Book | About</title>
</head>

<body style="background-image: url(../img/index-pw.jpg)">
    <nav class="navbar navbar-expand-md bg-transparent sticky-top mynavbar">
        <div class="container">
            <a class="navbar-brand" href="index.php">
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

    <div class="top mt-4">
        <div class="container">
            <div class="row text-white bg-black justify-content-between">
                <div class="col-7 px-5">
                    <h5 class="mt-4 text-center fw-bold fs-4">ER-Book</h5>
                    <p class="mt-4" style="text-align: justify;">ER-Book is an Anime comic book store or commonly called Manga from various Anime for Anime lovers.
                        Anime is hand-drawn and computer-generated animation originating from Japan. Outside Japan and in English, anime refers specifically to animation produced in Japan. However, in Japan, anime (a term derived from a shortening of the English word animation) describes all animated works, regardless of style or origin. Many works of animation with a similar style to Japanese animation are also produced outside Japan. Video games sometimes also feature themes and artstyles that can be considered as "Anime".</p>
                </div>

                <div class="col-4 mt-4 mb-4">
                    <img src="../img/Straw Hat Pirates.jpeg" alt="" width="400px" style="margin-left: -100px; margin-top: 40px;">
                </div>
            </div>
        </div>
    </div>

    <div class="bottom mt-4">
        <div class="container">
            <div class="row justify-content-between bg-light">
                <div class="col-4 mt-4 mb-4">
                    <img src="../img/Luffy Gear 5.jpeg" alt="" width="450px" style="margin-right: -100px;">
                </div>

                <div class="col-7 px-5">
                    <h5 class="mt-4 text-center fw-bold fs-4">Manga</h5>
                    <p class="mt-4" style="text-align: justify;">Manga are comics or graphic novels originating from Japan. Most manga conform to a style developed in Japan in the late 19th century, and the form has a long history in earlier Japanese art. The term manga is used in Japan to refer to both comics and cartooning. Outside of Japan, the word is typically used to refer to comics originally published in the country. In Japan, people of all ages and walks of life read manga. The medium includes works in a broad range of genres: action, adventure, business and commerce, comedy, detective, drama, historical, horror, mystery, romance, science fiction and fantasy, sports and games, and suspense, among others. Many manga are translated into other languages.</p>
                </div>

            </div>
        </div>
    </div>

    <div class="footer text-white">
        <div class="container">
            <div class="row bg-black mt-4">
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

    <!-- JS Lokal -->
    <script src="js/script.js"></script>
    <!-- JS Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>