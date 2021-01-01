<?php
require 'function.php';

$mahasiswa = mysqli_query( $conn, "SELECT * FROM mahasiswa " );

//menampilkan error MySQLi

if( !$mahasiswa ){
    echo mysqli_error($conn);

} 

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
<?php foreach( $mahasiswa as $mhs ) : ?>
    <tr>
        <td><?= $i; ?></td>
        <td>
            <a href=""> Edit </a> | 
            <a href=""> Hapus </a>       
        </td>
        <td><?= $mhs["nama"];?></td>
        <td><?= $mhs["nim"];?></td>
        <td><?= $mhs["email"];?></td>
        <td><?= $mhs["jurusan"];?></td>
    </tr>
<?php $i++;?>
<?php endforeach; ?>

</table>

</body>
</html>