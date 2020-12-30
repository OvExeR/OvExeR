<!-- Array Associative adalah array yang di asosiasikan atau key index nya string -->

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
    <title>Array Associative</title>
</head>
<body>
<h3>Array Associative adalah array yang di asosiasikan atau key index nya string</h3>   
    <?php foreach( $mahasiswa as $mhs ) : ?>     
            <ul>
                <li>Nama : <?php echo $mhs["nama"]; ?></li>
                <li>NIM : <?php echo $mhs["nim"]; ?></li>
                <li>Jurusan : <?php echo $mhs["jurusan"]; ?></li>
                <li>Email : <?php echo $mhs["email"]; ?></li>
            </ul>
    <?php endforeach;?>
</body>
</html>