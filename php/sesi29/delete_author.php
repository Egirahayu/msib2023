<?php
// Mohamad Egi Rahayu
// Universitas Pasundan
// Full Stack 01

include_once("config.php");

$id = $_GET['id'];

$result = mysqli_query($conn, "DELETE FROM author WHERE id = '$id'");

header("Location:author.php");
