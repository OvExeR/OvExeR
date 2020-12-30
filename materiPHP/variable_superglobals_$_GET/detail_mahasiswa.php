<!-- Cara agar user tidak bisa masuk ke halaman ini tanpa mengklik link dari halaman pertama menggunakan isset() -->

<?php

if( !isset( $_GET["nama"] ) ||
    !isset( $_GET["nim"] ) ||
    !isset( $_GET["jurusan"] ) ||
    !isset( $_GET["email"] )
  ){
    header("Location: variable_superglobals_$_GET.php");
    exit;

  }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Mahasiswa</title>
</head>
<body>
    <ul>
        <li>NAMA : <?= $_GET["nama"]; ?></li>
        <li>NIM : <?= $_GET["nim"]; ?></li>
        <li>JURUSAN : <?= $_GET["jurusan"]; ?></li>
        <li>EMAIL : <?= $_GET["email"]; ?></li>
    </ul>
</body>
</html>