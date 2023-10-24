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
      $mahasiswa = json_decode($data, true);

      foreach ($mahasiswa as $mhs => $value) {
        if ($value['nama'] == 'Pelita') {
          $mahasiswa[$mhs]['tanggal_lahir'] = "27 December 1997";
          $mahasiswa[$mhs]['umur'] = "24";
          $mahasiswa[$mhs]['hasil'] = "A";
        } else if ($value['nama'] == 'Najmina') {
          $mahasiswa[$mhs]['tanggal_lahir'] = "07 October 1998";
          $mahasiswa[$mhs]['umur'] = "23";
          $mahasiswa[$mhs]['hasil'] = "D";
        } else if ($value['nama'] == 'Anita') {
          $mahasiswa[$mhs]['tanggal_lahir'] = "20 August 1999";
          $mahasiswa[$mhs]['umur'] = "22";
          $mahasiswa[$mhs]['hasil'] = "B";
        } else if ($value['nama'] == 'Bayu') {
          $mahasiswa[$mhs]['tanggal_lahir'] = "01 January 1990";
          $mahasiswa[$mhs]['umur'] = "31";
          $mahasiswa[$mhs]['hasil'] = "D";
        } else if ($value['nama'] == 'Nasa') {
          $mahasiswa[$mhs]['tanggal_lahir'] = "10 April 1995";
          $mahasiswa[$mhs]['umur'] = "26";
          $mahasiswa[$mhs]['hasil'] = "C";
        } else if ($value['nama'] == 'Rahma') {
          $mahasiswa[$mhs]['tanggal_lahir'] = "15 September 1993";
          $mahasiswa[$mhs]['umur'] = "28";
          $mahasiswa[$mhs]['hasil'] = "B";
        }
      }

      file_put_contents('data.json', json_encode($mahasiswa));
      ?>

      <?php foreach ($mahasiswa as $mhs) : ?>
        <?php if ($i % 2 == 1) $color = $colorGenap;
        else $color = $colorGanjil; ?>
        <tr bgcolor=<?= $color; ?>>
          <td><?= $i++; ?>.</td>
          <td><?= $mhs['nama']; ?></td>
          <td><?= $mhs['tanggal_lahir']; ?></td>
          <td><?= $mhs['umur']; ?> tahun</td>
          <td><?= $mhs['alamat']; ?></td>
          <td><?= $mhs['kelas']; ?></td>
          <td><?= $mhs['nilai']; ?></td>
          <td><?= $mhs['hasil']; ?></td>
        </tr>
      <?php endforeach; ?>
    </table>
  </div>

</body>

</html>