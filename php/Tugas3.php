<?php
// Mohamad Egi Rahayu
// Universitas Pasundan
// Full Stack 01

for ($i = 1; $i < 10; $i++) { // $i untuk menentukan awal dari looping sampai angka 9 secara berurutan
  for ($j = 0; $j < $i; $j++) { // $j untuk menentukan akhir dari looping menghasilkan turunan dari $i
    echo "$j"; // menampilkan looping dari $j hasil turunan dari $i
  }

  echo "<br>"; // untuk merapihkan tampilan
}
