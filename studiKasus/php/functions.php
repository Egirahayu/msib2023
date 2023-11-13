<?php
// Mohamad Egi Rahayu
// Universitas Pasundan
// Full Stack 01

function koneksi()
{
  $conn = mysqli_connect("localhost", "root", "");
  mysqli_select_db($conn, "buku");

  return $conn;
}

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

  if ($error == 4) {
    return 'nophoto.jpg';
  }

  $daftar_gambar = ['jpg', 'jpeg', 'png'];
  $ekstensi_file = explode('.', $nama_file);
  $ekstensi_file = strtolower(end($ekstensi_file));
  if (!in_array($ekstensi_file, $daftar_gambar)) {
    echo "<script>
            alert('Yang anda pilih bukan gambar!');
          </script>";
    return false;
  }

  if ($tipe_file != 'image/jpeg' && $tipe_file != 'image/png') {
    echo "<script>
                alert('Yang anda pilih bukan gambar!');
              </script>";
    return false;
  }

  if ($ukuran_file > 5000000) {
    echo "<script>
                alert('Ukuran terlalu besar!');
              </script>";
    return false;
  }

  $nama_file_baru = uniqid();
  $nama_file_baru .= '.';
  $nama_file_baru .= $ekstensi_file;
  move_uploaded_file($tmp_file, '../../img/' . $nama_file_baru);

  return $nama_file_baru;
}

// Komik
function add_komik($data)
{
  $conn = koneksi();

  $nama_komik = htmlspecialchars($data['nama_komik']);
  $deskripsi = htmlspecialchars($data['deskripsi']);
  $tahun = htmlspecialchars($data['tahun']);
  $harga = htmlspecialchars($data['harga']);
  $category_id = htmlspecialchars($data['category_id']);
  $penerbit_id = htmlspecialchars($data['penerbit_id']);
  $pengarang_id = htmlspecialchars($data['pengarang_id']);
  // $img = htmlspecialchars($data['img']);

  // Upload gambar 
  $img = upload();
  if (!$img) {
    return false;
  }

  $query = "INSERT INTO komik
              VALUES
            ('', '$img', '$nama_komik', '$deskripsi', '$tahun', '$harga', '$category_id', '$penerbit_id', '$pengarang_id')";

  mysqli_query($conn, $query);

  return mysqli_affected_rows($conn);
}

function update_komik($data)
{
  $conn = koneksi();
  $id = ($data['id']);
  $nama_komik = htmlspecialchars($data['nama_komik']);
  $deskripsi = htmlspecialchars($data['deskripsi']);
  $tahun = htmlspecialchars($data['tahun']);
  $harga = htmlspecialchars($data['harga']);
  $category_id = htmlspecialchars($data['category_id']);
  $penerbit_id = htmlspecialchars($data['penerbit_id']);
  $pengarang_id = htmlspecialchars($data['pengarang_id']);
  $gambar_lama = htmlspecialchars($data['gambar_lama']);

  $img = upload();
  if (!$img) {
    return false;
  }

  if ($img == 'nophoto.jpg') {
    $img = $gambar_lama;
  }

  $query = "UPDATE komik SET
                nama_komik = '$nama_komik',
                deskripsi = '$deskripsi',
                tahun = '$tahun',
                harga = '$harga',
                category_id = '$category_id',
                penerbit_id = '$penerbit_id',
                pengarang_id = '$pengarang_id',
                img = '$img'
                WHERE id = '$id'
                ";

  mysqli_query($conn, $query);

  return mysqli_affected_rows($conn);
}

function delete_komik($id)
{
  $conn = koneksi();

  mysqli_query($conn, "DELETE FROM komik WHERE id = $id");
  return mysqli_affected_rows($conn);
}

// Category
function add_category($data)
{
  $conn = koneksi();

  $nama_category = htmlspecialchars($data['nama_category']);

  $query = "INSERT INTO category
              VALUES
            ('', '$nama_category')";

  mysqli_query($conn, $query);

  return mysqli_affected_rows($conn);
}

function update_category($data)
{
  $conn = koneksi();

  $id = ($data['id']);
  $nama_category = htmlspecialchars($data['nama_category']);

  $query = "UPDATE category SET
                nama_category = '$nama_category'
                WHERE id = '$id'
                ";

  mysqli_query($conn, $query);

  return mysqli_affected_rows($conn);
}

function delete_category($id)
{
  $conn = koneksi();

  mysqli_query($conn, "DELETE FROM category WHERE id = $id");
  return mysqli_affected_rows($conn);
}

// Author
function add_author($data)
{
  $conn = koneksi();

  $nama_pengarang = htmlspecialchars($data['nama_pengarang']);
  $tgl_lahir = htmlspecialchars($data['tgl_lahir']);
  $alamat = htmlspecialchars($data['alamat']);

  $query = "INSERT INTO pengarang
              VALUES
            ('', '$nama_pengarang', '$tgl_lahir', '$alamat')";

  mysqli_query($conn, $query);

  return mysqli_affected_rows($conn);
}

function update_author($data)
{
  $conn = koneksi();

  $id = ($data['id']);
  $nama_pengarang = htmlspecialchars($data['nama_pengarang']);
  $tgl_lahir = htmlspecialchars($data['tgl_lahir']);
  $alamat = htmlspecialchars($data['alamat']);

  $query = "UPDATE pengarang SET
                nama_pengarang = '$nama_pengarang',
                tgl_lahir = '$tgl_lahir',
                alamat = '$alamat'
                WHERE id = '$id'
                ";

  mysqli_query($conn, $query);

  return mysqli_affected_rows($conn);
}

function delete_author($id)
{
  $conn = koneksi();

  mysqli_query($conn, "DELETE FROM pengarang WHERE id = $id");
  return mysqli_affected_rows($conn);
}

// Publisher
function add_publisher($data)
{
  $conn = koneksi();

  $nama_penerbit = htmlspecialchars($data['nama_penerbit']);
  $alamat = htmlspecialchars($data['alamat']);

  $query = "INSERT INTO penerbit
              VALUES
            ('', '$nama_penerbit', '$alamat')";

  mysqli_query($conn, $query);

  return mysqli_affected_rows($conn);
}

function update_publisher($data)
{
  $conn = koneksi();

  $id = ($data['id']);
  $nama_penerbit = htmlspecialchars($data['nama_penerbit']);
  $alamat = htmlspecialchars($data['alamat']);

  $query = "UPDATE penerbit SET
                nama_penerbit = '$nama_penerbit',
                alamat = '$alamat'
                WHERE id = '$id'
                ";

  mysqli_query($conn, $query);

  return mysqli_affected_rows($conn);
}

function delete_publisher($id)
{
  $conn = koneksi();

  mysqli_query($conn, "DELETE FROM penerbit WHERE id = $id");
  return mysqli_affected_rows($conn);
}

function registrasi($data)
{
  $conn = koneksi();
  $username = strtolower(stripcslashes($data["username"]));
  $password = mysqli_real_escape_string($conn, $data["password"]);

  $result = mysqli_query($conn, "SELECT username FROM user WHERE username = '$username'");
  if (mysqli_fetch_assoc($result)) {
    echo "<script>
                alert('Username sudah digunakan');
              </script>";
    return false;
  }

  $password = password_hash($password, PASSWORD_DEFAULT);

  $query_tambah = "INSERT INTO user VALUES('', '$username', '$password')";
  mysqli_query($conn, $query_tambah);

  return mysqli_affected_rows($conn);
}
