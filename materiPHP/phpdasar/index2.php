<?php
// Koneksi ke database
$conn = mysqli_connect( "localhost", "root", "", "phpdasar" );


// Megambil data dari table database yang dikoneksikan / query data mahasiswa

$result = mysqli_query( $conn, "SELECT * FROM mahasiswa " );

//menampilkan error MySQLi

if( !$result ){
    echo mysqli_error($conn);

} 

// Mengambil data ( fetch ) mahasiswa dari object result
// Ada 4 Cara
// 1. myqsli_fetch_row = mengembalikan array numerik
// 2. mysqli_fetch_assoc = mengembalika array associative
// 3. mysqli_fetch_array = mengembalikan numerik dan associative bersamaan
// 4. mysqli_fetch_object = mengembalikan object (bukan numerik dan bukan associative)

// while($mhs = mysqli_fetch_assoc( $result ) ){
//     var_dump($mhs);

// }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD</title>
</head>
<body>
    
<table border="1" cellpadding="10" cellspacing="0"  >


    <tr>
        <th>No.</th>
        <th>Aksi</th>
        <th>Nama</th>
        <th>NIM</th>
        <th>Email</th>
        <th>Jurusan</th>
    </tr>

<?php $i = 1 ;?>
<?php while( $row = mysqli_fetch_assoc( $result ) ) : ?>
    <tr>
        <td><?= $i; ?></td>
        <td>
            <a href=""> Edit </a> | 
            <a href=""> Hapus </a>       
        </td>
        <td><?= $row["nama"];?></td>
        <td><?= $row["nim"];?></td>
        <td><?= $row["email"];?></td>
        <td><?= $row["jurusan"];?></td>
    </tr>
<?php $i++;?>
<?php endwhile; ?>

</table>

</body>
</html>