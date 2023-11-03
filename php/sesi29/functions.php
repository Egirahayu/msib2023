<?php
// Mohamad Egi Rahayu
// Universitas Pasundan
// Full Stack 01
?>

<?php
// Fungsi untuk melakukan koneksi ke database
function koneksi()
{
  $conn = mysqli_connect("localhost", "root", "");
  mysqli_select_db($conn, "char_anime");

  return $conn;
}

// Function untuk melakukan query dan memasukkannya kedalam array
function query($sql)
{
  $conn = koneksi();
  $result = mysqli_query($conn, "$sql");
  $rows = [];
  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }
  return $rows;
}

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

// Fungsi untuk menambahkan data di database
function add_anime($data)
{
  $conn = koneksi();

  $nama_anime = htmlspecialchars($data['nama_anime']);
  $rilis = htmlspecialchars($data['rilis']);
  $id_author = htmlspecialchars($data['id_author']);
  // $img = htmlspecialchars($data['img']);

  // Upload gambar 
  $img = upload();
  if (!$img) {
    return false;
  }

  $query = "INSERT INTO anime
              VALUES
            ('', '$img', '$nama_anime', '$rilis', '$id_author')";

  mysqli_query($conn, $query);

  return mysqli_affected_rows($conn);
}

function add_author($data)
{
  $conn = koneksi();

  $nama_author = htmlspecialchars($data['nama_author']);
  $tgl_lahir = htmlspecialchars($data['tgl_lahir']);
  // $img = htmlspecialchars($data['img']);

  // Upload gambar 
  $img = upload();
  if (!$img) {
    return false;
  }

  $query = "INSERT INTO author
              VALUES
            ('', '$img', '$nama_author', '$tgl_lahir')";

  mysqli_query($conn, $query);

  return mysqli_affected_rows($conn);
}

function add_char($data)
{
  $conn = koneksi();

  $nama_char = htmlspecialchars($data['nama_char']);
  $tgl_lahir = htmlspecialchars($data['tgl_lahir']);
  $id_anime = htmlspecialchars($data['id_anime']);
  // $img = htmlspecialchars($data['img']);

  // Upload gambar 
  $img = upload();
  if (!$img) {
    return false;
  }

  $query = "INSERT INTO characters
              VALUES
            ('', '$img', '$nama_char', '$tgl_lahir', '$id_anime')";

  mysqli_query($conn, $query);

  return mysqli_affected_rows($conn);
}

// Fungsi untuk menghapus data di database
function delete_anime($id)
{
  $conn = koneksi();

  mysqli_query($conn, "DELETE FROM anime WHERE id = $id");
  return mysqli_affected_rows($conn);
}

function delete_author($id)
{
  $conn = koneksi();

  mysqli_query($conn, "DELETE FROM author WHERE id = $id");
  return mysqli_affected_rows($conn);
}

function delete_char($id)
{
  $conn = koneksi();

  mysqli_query($conn, "DELETE FROM characters WHERE id = $id");
  return mysqli_affected_rows($conn);
}

// Fungsi untuk mengubah data di database
function update_anime($data)
{

  $conn = koneksi();
  $id = ($data['id']);
  $nama_anime = htmlspecialchars($data['nama_anime']);
  $rilis = htmlspecialchars($data['rilis']);
  $id_author = htmlspecialchars($data['id_author']);
  $gambar_lama = htmlspecialchars($data['gambar_lama']);

  $img = upload();
  if (!$img) {
    return false;
  }

  if ($img == 'nophoto.jpg') {
    $img = $gambar_lama;
  }

  $query = "UPDATE anime SET
                nama_anime = '$nama_anime',
                rilis = '$rilis',
                id_author = '$id_author',
                img = '$img'
                WHERE id = '$id'
                ";

  mysqli_query($conn, $query);

  return mysqli_affected_rows($conn);
}

function update_author($data)
{

  $conn = koneksi();
  $id = ($data['id']);
  $nama_author = htmlspecialchars($data['nama_author']);
  $tgl_lahir = htmlspecialchars($data['tgl_lahir']);
  $gambar_lama = htmlspecialchars($data['gambar_lama']);

  $img = upload();
  if (!$img) {
    return false;
  }

  if ($img == 'nophoto.jpg') {
    $img = $gambar_lama;
  }

  $query = "UPDATE author SET
                nama_author = '$nama_author',
                tgl_lahir = '$tgl_lahir',
                img = '$img'
                WHERE id = '$id'
                ";

  mysqli_query($conn, $query);

  return mysqli_affected_rows($conn);
}

function update_char($data)
{

  $conn = koneksi();
  $id = ($data['id']);
  $nama_char = htmlspecialchars($data['nama_char']);
  $tgl_lahir = htmlspecialchars($data['tgl_lahir']);
  $id_anime = htmlspecialchars($data['id_anime']);
  $gambar_lama = htmlspecialchars($data['gambar_lama']);

  $img = upload();
  if (!$img) {
    return false;
  }

  if ($img == 'nophoto.jpg') {
    $img = $gambar_lama;
  }

  $query = "UPDATE characters SET
                nama_char = '$nama_char',
                tgl_lahir = '$tgl_lahir',
                id_anime = '$id_anime',
                img = '$img'
                WHERE id = '$id'
                ";

  mysqli_query($conn, $query);

  return mysqli_affected_rows($conn);
}
?>