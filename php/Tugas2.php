<?php
// Mohamad Egi Rahayu
// Universitas Pasundan
// Full Stack 01

for ($i = 9; $i >= 1; $i--) { // untuk menentukan awal dari looping, $i = 9 artinya looping berawal dari 9, $i-- artinya angka dari looping menurun
  for ($j = 1; $j <= $i; $j++) { // untuk menentukan akhir dari looping, $j <= $i artinya nilai j harus kurang dari 9 agar looping jalan
    echo "*"; // untuk menampilkan * dari hasil looping 
  }

  echo "<br>"; // untuk merapihkan tampilan
}
