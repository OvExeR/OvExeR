<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>$_POST</title>
</head>
<body>
<?php if( isset( $_POST["submit"] )) : ?>

    <h3>
         Halo, Selamat Datang <?= $_POST["nama"]; ?>
    </h3>

<?php endif; ?>
<!-- Kosongkan action berarti mengambil data dari halaman ini sendiri -->
<!-- Mengisi action dengan halaman lain, berarti mengambil data dari halaman yang di isikan  -->
    <form action="" method="post" >
    Masukkan Nama : 
        <input type="text" name="nama" ></input>
        <br>
        <button type="submit" name="submit" > Kirim </button>
    </form>
</body>
</html>