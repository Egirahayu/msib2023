<?php
// Mohamad Egi Rahayu
// Universitas Pasundan
// Full Stack 01
?>

<!DOCTYPE html>
<html>

<head>
  <title>Kalkulator BMI</title>
  <style>
    input {
      margin-bottom: 5px;
    }
  </style>
</head>

<body>
  <h1>Kalkulator BMI</h1>

  <form method="POST">
    <label for="nama" style="padding-right: 55px;">Nama</label>
    <input type="text" name="nama" id="nama"><br>
    <label for="tb" style="padding-right: 6.5px;">Tinggi Badan</label>
    <input type="number" name="tb" id="tb"><br>
    <label for="bb" style="padding-right: 13.5px;">Berat Badan</label>
    <input type="number" name="bb" id="bb"><br>
    <input type="submit" name="submit" value="Hitung">
  </form>

  <?php
  if (isset($_POST['submit'])) {
    $nama = $_POST['nama'];
    $tb = $_POST['tb'];
    $bb = $_POST['bb'];

    $tinggi = $tb / 100;
    $kalBMI = $bb / ($tinggi * $tinggi);

    if ($kalBMI <= 18.4) {
      $kategori = "Kurus";
    } else if ($kalBMI >= 18.5 && $kalBMI <= 24.9) {
      $kategori = "Sedang";
    } else if ($kalBMI >= 25 && $kalBMI <= 30) {
      $kategori = "Gemuk";
    } else {
      $kategori = "Obesitas";
    }

    echo "Halo, " . $nama . ". Nilai BMI anda adalah " . round($kalBMI, 1) . ", anda termasuk " . $kategori . ".";
  }
  ?>
</body>

</html>