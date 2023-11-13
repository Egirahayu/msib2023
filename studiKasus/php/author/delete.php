<?php
// Mohamad Egi Rahayu
// Universitas Pasundan
// Full Stack 01

require '../functions.php';
$id = $_GET['id'];

if (delete_author($id) > 0) {
  echo "<script>
          alert('Data Successfully deleted!');
          document.location.href = '../author.php';
        </script>";
} else {
  echo "<script>
          alert('Data Failed to delete!');
          document.location.href = '../author.php';
        </script>";
}
