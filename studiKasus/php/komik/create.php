<?php
// Mohamad Egi Rahayu
// Universitas Pasundan
// Full Stack 01

require '../functions.php';

if (isset($_POST['add_komik'])) {
    if (add_komik($_POST) > 0) {
        echo "<script>
            alert('Data Added successfully!');
            document.location.href = '../komik.php';
          </script>";
    } else {
        echo "<script>
            alert('Data Failed to add!');
            document.location.href = '../komik.php';
          </script>";
    }
}

$category = query("SELECT category.id, nama_category FROM category");
$publish = query("SELECT penerbit.id, nama_penerbit FROM penerbit");
$author = query("SELECT pengarang.id, nama_pengarang FROM pengarang");

session_start();

if (!isset($_SESSION["username"])) {
    header("Location: ../login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Css Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!-- css materialize -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <!-- Css Lokal -->
    <link rel="stylesheet" href="../../css/style.css">

    <link rel="shortcut icon" href="../../img/ER.png">
    <title>ER-Book | Add Data Manga</title>

    <style>
        .container {
            width: 800px;
            margin: 20px;
        }
    </style>
</head>

<body class="bg-info ">
    <div class="form d-flex justify-content-center align-item-center">
        <div class=" container">
            <form action="" method="post" enctype="multipart/form-data">
                <div class="card-panel">
                    <h5>Form Add Data Manga</h5>
                    <div class="input-field">
                        <input type="text" name="nama_komik" id="nama_komik" class="validate" autocomplete="off">
                        <label for="nama_komik">Manga</label>
                    </div>
                    <div class="input-field">
                        <textarea name="deskripsi" id="deskripsi" class="materialize-textarea"></textarea>
                        <label for="deskripsi">Description</label>
                    </div>
                    <div class="input-field">
                        <input type="text" name="tahun" id="tahun" autocomplete="off">
                        <label for="tahun">Release</label>
                    </div>
                    <div class="input-field">
                        <input type="number" name="harga" id="harga" autocomplete="off">
                        <label for="harga">Price</label>
                    </div>
                    <div class="input-field">
                        <select class="browser-default" name="category_id">
                            <option selected>Category</option>
                            <?php foreach ($category as $categories) : ?>
                                <option value="<?= $categories['id']; ?>"><?= $categories['nama_category']; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="input-field">
                        <select class="browser-default" name="penerbit_id">
                            <option selected>Publisher</option>
                            <?php foreach ($publish as $penerbit) : ?>
                                <option value="<?= $penerbit['id']; ?>"><?= $penerbit['nama_penerbit']; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="input-field">
                        <select class="browser-default" name="pengarang_id">
                            <option selected>Author</option>
                            <?php foreach ($author as $auth) : ?>
                                <option value="<?= $auth['id']; ?>"><?= $auth['nama_pengarang']; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="file-field input-field">
                        <div class="btn">
                            <span>File</span>
                            <input type="file" multiple name="gambar" class="gambar" onchange="previewImage()">
                        </div>
                        <div class="file-path-wrapper">
                            <input class="file-path validate" type="text" placeholder="Upload Image">
                        </div>
                        <img src="../../img/nophoto.jpg" width="120px" style="display: block;" class="img-preview">
                    </div>
                    <button class="waves-effect waves-light orange darken-4 btn" type="submit" name="add_komik">Add Data!</button>
                    <button class="waves-effect waves-light orange darken-4 btn" type="submit">
                        <a href="../komik.php" style='text-decoration: none; color: white;'>Back</a>
                    </button>
                </div>
            </form>
        </div>
    </div>

    <!-- JS Lokal -->
    <script src="../../js/script.js"></script>
    <!-- JS Materialize -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <!-- JS Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

    <script>
        function previewImage() {
            const gambar = document.querySelector('.gambar');
            const imgPreview = document.querySelector('.img-preview');

            const oFReader = new FileReader();
            oFReader.readAsDataURL(gambar.files[0]);

            oFReader.onload = function(oFREvent) {
                imgPreview.src = oFREvent.target.result;
            };
        };
    </script>
</body>

</html>