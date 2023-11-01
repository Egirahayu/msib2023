<?php
// Mohamad Egi Rahayu
// Universitas Pasundan
// Full Stack 01

function upload()
{
  $nama_file = $_FILES['gambar']['name'];
  $tipe_file = $_FILES['gambar']['type'];
  $ukuran_file = $_FILES['gambar']['size'];
  $error = $_FILES['gambar']['error'];
  $tmp_file = $_FILES['gambar']['tmp_name'];

  // Ketika tidak ada gambar yang dipilih
  if ($error == 4) {
    // echo "<script>
    //         alert('Pilih gambar terlebih dahulu!');
    //       </script>";
    return 'nophoto.jpg';
  }

  // Cek ekstensi file
  $daftar_gambar = ['jpg', 'jpeg', 'png'];
  $ekstensi_file = explode('.', $nama_file);
  $ekstensi_file = strtolower(end($ekstensi_file));
  if (!in_array($ekstensi_file, $daftar_gambar)) {
    echo "<script>
            alert('Yang anda pilih bukan gambar!');
          </script>";
    return false;
  }

  // Cek type file
  if ($tipe_file != 'image/jpeg' && $tipe_file != 'image/png') {
    echo "<script>
                alert('Yang anda pilih bukan gambar!');
              </script>";
    return false;
  }

  // Cek ukuran filw
  // Maksimal 5Mb == 5000000
  if ($ukuran_file > 5000000) {
    echo "<script>
                alert('Ukuran terlalu besar!');
              </script>";
    return false;
  }

  // Lolos pengecekan
  // Siap upload file
  // Generate nama file baru
  $nama_file_baru = uniqid();
  $nama_file_baru .= '.';
  $nama_file_baru .= $ekstensi_file;
  move_uploaded_file($tmp_file, 'img/' . $nama_file_baru);

  return $nama_file_baru;
}

$nama = $_POST['nama'];
$tglLahir = $_POST['tglLahir'];

$img = upload();
if (!$img) {
  return false;
}

include_once("config.php");

$result = mysqli_query($conn, "INSERT INTO author (img, nama_author, tgl_lahir) VALUES ('$img', '$nama', '$tglLahir');");

header("Location:author.php");
