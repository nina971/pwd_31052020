<?php
require 'functions.php';

//ambil id dari url
$id = $_GET['id'];


//query mahaasiswa berdasarkan id
$mahasiswa = query("SELECT * FROM mahasiswa WHERE id = $id");

?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>DETAIL MAHASISWA</title>
</head>

<body>
  <h3>Detail Mahasiswa</h3>
  <ul>
    <li><img src="img/<?= $mahasiswa['gambar']; ?>" alt=""></li>
    <li><?= $mahasiswa['nrp']; ?></li>
    <li><?= $mahasiswa['nama']; ?></li>
    <li><?= $mahasiswa['email']; ?></li>
    <li><?= $mahasiswa['jurusan']; ?></li>
    <li><a href="ubah.php?id=<?= $mahasiswa['id']; ?>">Ubah</a> | <a href="hapus.php?id=<?= $mahasiswa['id']; ?> " onclick="return confirm('Apakah anda yakin mau menghapus data?');">Hapus</a></li>
    <li><a href="index.php">Kembali ke daftar Mahasiswa</a></li>
  </ul>
</body>

</html>