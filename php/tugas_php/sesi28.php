<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Latihan JSON</title>

  <style>
    nav {
      background-color: orange;
      padding: 10px;
      margin-bottom: 40px;
    }

    .tabel {
      display: flex;
      justify-content: center;
      align-items: center;
    }

    tr,
    th,
    td {
      padding: 10px;
      text-align: left;
    }

    td {
      padding-right: 25px;
    }
  </style>
</head>

<body>
  <nav>
    <h1>Daftar Nilai</h1>
  </nav>

  <div class="tabel">
    <table border="1" cellspacing="0">
      <tr>
        <th>No.</th>
        <th>Nama</th>
        <th>Tanggal Lahir</th>
        <th>Umur</th>
        <th>Alamat</th>
        <th>Kelas</th>
        <th>Nilai</th>
        <th>Hasil</th>
      </tr>

      <?php
      $i = 1;
      $colorGenap = "#CCCCCC";
      $colorGanjil = "#FFFFFF";

      $data = file_get_contents("data.json");
      $mahasiswa = json_decode($data);
      ?>

      <?php foreach ($mahasiswa as $mhs) : ?>
        <?php if ($i % 2 == 1) $color = $colorGenap;
        else $color = $colorGanjil; ?>
        <?php
        $tglLahir = $mhs->tanggal_lahir;
        $tanggalSekarang = new DateTime();
        $tanggalLahir = new DateTime($tglLahir);
        $umur = $tanggalLahir->diff($tanggalSekarang)->y;

        $format = date("d F Y", strtotime($tglLahir));

        $nilai = $mhs->nilai;
        if ($nilai >= 90 && $nilai <= 100) {
          $indeks = "A";
        } else if ($nilai >= 80 && $nilai < 90) {
          $indeks = "B";
        } else if ($nilai >= 70 && $nilai < 80) {
          $indeks = "C";
        } else if ($nilai >= 60 && $nilai < 70) {
          $indeks = "D";
        } else {
          $indeks = "E";
        }
        ?>
        <tr bgcolor=<?= $color; ?>>
          <td><?= $i++; ?>.</td>
          <td><?= $mhs->nama; ?></td>
          <td><?= $format; ?></td>
          <td><?= $umur; ?> tahun</td>
          <td><?= $mhs->alamat; ?></td>
          <td><?= $mhs->kelas; ?></td>
          <td><?= $mhs->nilai; ?></td>
          <td><?= $indeks; ?></td>
        </tr>
      <?php endforeach; ?>
    </table>
  </div>

</body>

</html>