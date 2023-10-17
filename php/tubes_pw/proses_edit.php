<?php
// Mohamad Egi Rahayu
// Universitas Pasundan
// Full Stack 01

$id = $_GET['id'];
$nama = $_POST['nama'];
$anime = $_POST['anime'];
$pengarang = $_POST['pengarang'];
$rilis = $_POST['rilis'];

include_once("config.php");

$result = mysqli_query($conn, "UPDATE anime SET nama = '$nama', anime = '$anime', pengarang = '$pengarang', rilis = '$rilis' WHERE id = '$id';");

header("Location:index.php");
