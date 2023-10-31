<?php
// Mohamad Egi Rahayu
// Universitas Pasundan
// Full Stack 01

$nama = $_POST['nama'];
$tglLahir = $_POST['tglLahir'];

include_once("config.php");

$result = mysqli_query($conn, "INSERT INTO author (nama_author, tgl_lahir) VALUES ('$nama', '$tglLahir');");

header("Location:author.php");
