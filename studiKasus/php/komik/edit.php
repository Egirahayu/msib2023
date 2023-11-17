<?php
// Mohamad Egi Rahayu
// Universitas Pasundan
// Full Stack 01

require '../functions.php';

$id = $_GET['id'];
$komik = query("SELECT komik.id, img, nama_komik, deskripsi, tahun, harga, category_id, category.nama_category, penerbit_id, penerbit.nama_penerbit, pengarang_id, pengarang.nama_pengarang
FROM komik 
JOIN category ON komik.category_id = category.id
JOIN penerbit ON komik.penerbit_id = penerbit.id
JOIN pengarang ON komik.pengarang_id = pengarang.id
WHERE komik.id = $id")[0];

$category = query("SELECT category.id, nama_category FROM category JOIN komik ON komik.category_id = category.id GROUP BY nama_category");
$publish = query("SELECT penerbit.id, nama_penerbit FROM penerbit JOIN komik ON komik.penerbit_id = penerbit.id GROUP BY nama_penerbit");
$author = query("SELECT pengarang.id, nama_pengarang FROM pengarang JOIN komik ON komik.pengarang_id = pengarang.id GROUP BY nama_pengarang");

if (isset($_POST['update_komik'])) {
    if (update_komik($_POST) > 0) {
        echo "<script>
            alert('Data Successfully update!');
            document.location.href = '../komik.php';
          </script>";
    } else {
        echo "<script>
            alert('Data Failed to update!');
            document.location.href = '../komik.php';
          </script>";
    }
}

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
    <title>ER-Book | Update Data Manga</title>

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
                <input type="hidden" name="id" id="id" value="<?= $komik["id"] ?>">
                <div class="card-panel">
                    <h5>Form Update Data Manga</h5>
                    <div class="input-field">
                        <input type="text" name="nama_komik" id="nama_komik" required value="<?= $komik["nama_komik"]; ?>">
                        <label for="nama_komik">Komik</label>
                    </div>
                    <div class="input-field">
                        <textarea name="deskripsi" id="deskripsi" required class="materialize-textarea"><?= $komik["deskripsi"]; ?></textarea>
                        <label for="deskripsi">Description</label>
                    </div>
                    <div class="input-field">
                        <input type="text" name="tahun" id="tahun" required value="<?= $komik["tahun"]; ?>">
                        <label for="tahun">Release</label>
                    </div>
                    <div class="input-field">
                        <input type="number" name="harga" id="harga" required value="<?= $komik["harga"]; ?>">
                        <label for="harga">Price</label>
                    </div>
                    <div class="input-field">
                        <select class="browser-default" name="category_id">
                            <option value="<?= $komik['category_id']; ?>" selected><?php echo $komik['nama_category']; ?></option>
                            <?php foreach ($category as $categories) : ?>
                                <?php if ($komik['category_id'] != $categories['id']) : ?>
                                    <option value="<?= $categories['id']; ?>"><?= $categories['nama_category']; ?></option>
                                <?php endif; ?>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="input-field">
                        <select class="browser-default" name="penerbit_id">
                            <option value="<?= $komik['penerbit_id']; ?>" selected><?php echo $komik['nama_penerbit']; ?></option>
                            <?php foreach ($publish as $penerbit) : ?>
                                <?php if ($komik['penerbit_id'] != $penerbit['id']) : ?>
                                    <option value="<?= $penerbit['id']; ?>"><?= $penerbit['nama_penerbit']; ?></option>
                                <?php endif; ?>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="input-field">
                        <select class="browser-default" name="pengarang_id">
                            <option value="<?= $komik['pengarang_id']; ?>" selected><?php echo $komik['nama_pengarang']; ?></option>
                            <?php foreach ($author as $auth) : ?>
                                <?php if ($komik['pengarang_id'] != $auth['id']) : ?>
                                    <option value="<?= $auth['id']; ?>"><?= $auth['nama_pengarang']; ?></option>
                                <?php endif; ?>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="file-field input-field">
                        <input type="hidden" name="gambar_lama" value="<?= $komik['img']; ?>">
                        <div class="btn">
                            <span>File</span>
                            <input type="file" multiple name="gambar" class="gambar" onchange="previewImage()">
                        </div>
                        <div class="file-path-wrapper">
                            <input class="file-path validate" type="text" placeholder="Upload Image">
                        </div>
                        <img src="../../img/<?= $komik["img"]; ?>" width="120px" style="display: block;" class="img-preview">
                    </div>
                    <button class="waves-effect waves-light orange darken-4 btn" type="submit" name="update_komik">Update Data!</button>
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