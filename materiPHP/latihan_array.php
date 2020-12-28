<!-- Membuat data siswa dengan array multi dimensi / array di dalam array -->

<?php
$siswa = [
    ["Lugas", "12345678", "RPL", "gmail@gmail.com"],
    ["Basri", "12344817", "RPL", "gmail@gmail.com"],
    ["Afif", "123451999", "RPL", "gmail@gmail.com"],
]


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DATA SISWA</title>
</head>
<body>
    <?php foreach( $siswa as $s ) :?>
    <ul>
    <li> NAMA : <?= $s[0]; ?> </li>
    <li> NIK : <?= $s[1]; ?> </li>
    <li> JURUSAN : <?= $s[2]; ?> </li>
    <li> EMAIL : <?= $s[3]; ?> </li>
    </ul>
    <?php endforeach; ?>

</body>
</html>