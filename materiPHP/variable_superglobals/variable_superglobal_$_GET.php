<!-- Variable Superglobals adalah Variable yang telah di sediakan oleh PHP -->
<?php
$mahasiswa =[
    [
        "nama"=>"Lugas Prasetyo",
        "nim"=>"123456789",
        "jurusan"=>"RPL",
        "email"=>"lugas.prasetio@gmail.com"
    ],
    [
        "nama"=>"Basri",
        "nim"=>"1234129918",
        "jurusan"=>"RPL",
        "email"=>"basri@gmail.com",
    ],
    [
        "nama"=>"Afif",
        "nim"=>"1231236789",
        "jurusan"=>"RPL",
        "email"=>"Afif@gmail.com",
    ],
]
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List Mahasiswa</title>
</head>
<body>
    <ul>
        <?php foreach( $mahasiswa as $mhs ): ?>
            <li>
                <a href="detail_mahasiswa.php?nama=<?= $mhs["nama"]; ?>&nim=<?= $mhs["nim"]; ?>&jurusan=<?= $mhs["jurusan"];?>&email=<?= $mhs["email"]; ?>"><?=$mhs["nama"];?></a>
            </li>
        <?php endforeach; ?>
    </ul>
</body>
</html>