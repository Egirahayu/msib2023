<?php
// Mohamad Egi Rahayu
// Universitas Pasundan
// Full Stack 01

session_start();
require 'functions.php';

if (isset($_SESSION['username'])) {
    header("Location: admin.php");
    exit;
}

if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $cek_user = mysqli_query(koneksi(), "SELECT * FROM user WHERE username = '$username'");

    if (mysqli_num_rows($cek_user) > 0) {
        $row = mysqli_fetch_assoc($cek_user);
        if (password_verify($password, $row['password'])) {
            $_SESSION['username'] = $_POST['username'];
            $_SESSION['hash'] = hash('sha256', $row['id_user'], false);

            if (isset($_POST['remember'])) {
                setcookie('username', $row['username'], time() + 60 * 60 * 24);
                $hash = hash('sha256', $row['id_user']);
                setcookie('hash', $hash, time() + 60 * 60 * 24);
            }

            if (hash('sha256', $row['id_user']) == $_SESSION['hash']) {
                header("Location: admin.php");
                die;
            }
            header("Location: ../index.php");
            die;
        }
    }
    $error = true;
}

if (isset($_COOKIE['username']) && isset($_COOKIE['hash'])) {
    $username = $_COOKIE['username'];
    $hash = $_COOKIE['hash'];

    $result = mysqli_query(koneksi(), "SELECT * FROM user WHERE username = '$username'");
    $row = mysqli_fetch_assoc($result);

    if ($hash === hash('sha256', $row['id_user'], false)) {
        $_SESSION['username'] = $row['username'];
        header("Location: admin.php");
        exit;
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Css Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!-- Css Lokal -->
    <link rel="stylesheet" href="../css/style.css">

    <link rel="shortcut icon" href="../img/ER.png">
    <title>ER-Book | Login</title>

    <style>
        .container {
            width: 500px;
            margin: 100px;
        }

        marquee {
            background-color: black;
            color: skyblue;
            font-size: 18px;
        }
    </style>
</head>

<body class="bg-info ">
    <marquee behavior="scroll" direction="right">LOGIN & REGISTRASI</marquee>

    <div class="login d-flex justify-content-center align-item-center">
        <div class=" container">
            <div class="card shadow p-4 mb-4 bg-body-tertiary rounded">
                <div class="card-body">
                    <form action="" method="post">
                        <h5 class="card-title text-center fw-bold mb-4">LOGIN</h5>

                        <?php if (isset($error)) : ?>
                            <p style="color: red; font-style: italic;">Incorrect Username or Password</p>
                        <?php endif; ?>

                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="username" name="username" placeholder="Username">
                            <label for="username">Username</label>
                        </div>
                        <div class="form-floating">
                            <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                            <label for="password">Password</label>
                        </div>

                        <div class="button mt-4" style="text-align: center;">
                            <button class="btn btn-primary" type="submit" name="submit">Login</button>
                            <button class="btn btn-primary" type="submit">
                                <a href="../index.php" style='text-decoration: none; color: white;'>Cancel</a>
                            </button>
                            <p class="mt-4" style="text-align: center;">Don't have an account? <a href="registrasi.php" style="text-decoration: none;">Registrasi</a></p>
                        </div>
                    </form>
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