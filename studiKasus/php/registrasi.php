<?php
// Mohamad Egi Rahayu
// Universitas Pasundan
// Full Stack 01

require 'functions.php';

if (isset($_POST["registrasi"])) {

    if (registrasi($_POST) > 0) {
        echo "<script>
                alert('Successful Registration');
                document.location.href = 'login.php';
              </script>";
    } else {
        echo "<script>
                alert('Registration Failed');
              </script>";
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
                        <h5 class="card-title text-center fw-bold mb-4">REGISTRASI</h5>

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
                            <button class="btn btn-primary" type="submit" name="registrasi">Registrasi</button>
                            <button class="btn btn-primary" type="submit">
                                <a href="../index.php" style='text-decoration: none; color: white;'>Cancel</a>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- JS Lokal -->
    <script src="../js/script.js"></script>
    <!-- JS Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>