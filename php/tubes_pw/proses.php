<?php
// Mohamad Egi Rahayu
// Universitas Pasundan
// Full Stack 01

$nama = $_POST['nama'];
$anime = $_POST['anime'];
$pengarang = $_POST['pengarang'];
$rilis = $_POST['rilis'];

include_once("config.php");

$result = mysqli_query($conn, "INSERT INTO anime (nama, anime, pengarang, rilis) VALUES ('$nama', '$anime', '$pengarang', '$rilis');");

header("Location:index.php");
