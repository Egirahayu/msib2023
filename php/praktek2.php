<?php
// Mohamad Egi Rahayu
// Universitas Pasundan
// Full Stack 01

for ($i = 1; $i < 10; $i++) {
  for ($j = 0; $j < $i; $j++) {
    echo "$j";
  }

  echo "<br>";
}

echo "<br>";

$colorGenap = "#CCCCCC";
$colorGanjil = "#FFFFFF";
?>

<!DOCTYPE html>
<html>

<head>
  <style>
    td {
      padding: 5px;
    }
  </style>
</head>

<body>

  <table border="1" cellspacing="0">
    <tr style="background-color: skyblue;">
      <th>No</th>
      <th>Nama</th>
      <th>Kelas</th>
    </tr>



    <?php for ($i = 1; $i <= 10; $i++) : ?>
      <?php if ($i % 2 == 1) $color = $colorGenap;
      else $color = $colorGanjil; ?>
      <tr bgcolor=<?= $color; ?>>
        <td><?= $i ?></td>
        <td><?= "Nama ke " . $i ?></td>
        <td><?= "Kelas " .  (11 - $i) ?></td>
      </tr>
    <?php endfor; ?>
  </table>
</body>

</html>