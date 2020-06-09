<?php
require 'functions.php';

// jika tidak ada id di url
if (!isset($_GET['id'])) {
  header("location: index.php");
  exit;
}

$id = $_GET['id'];

if (hapus($id) > 0) {
  echo "<script>
  
  alert('Data Berhasil Dihapus !');
  document.location.href = 'index.php';
  </script>
  ";
} else {
  echo "<script>
  alert('Data Gagal Dihapus !');
  </script>";
}
