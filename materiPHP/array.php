<!-- Array adalah tipe data untuk memuat banyak Nilai -->
<!-- Element pada array dapat berbeda -->
<!-- Pasangan antara key dan value -->
<!-- key-nya adalah index yang di mulai dari 0 -->
<?php
// cara lama
$nama = array("lugas","afif","basri");
// Cara baru
$warna = ["hijau", "merah", "biru"];

// cara baru dengan tipe element berbeda
$kalimat = ["1 kata",false, 10];

// cara menampilkan ke layar dengan var_dump
echo "<h2>Dengan var_dump</h2><br>";
var_dump($nama);
echo "<br>";

// cara menampilkan ke layar dengan print_r
echo "<h2>Dengan print_r</h2><br>";
print_r($warna);
echo "<br>";

// cara menampilkan ke layar dengan echo
echo "<h2>Dengan echo</h2><br>";
echo $kalimat[2];
echo $kalimat[1];
echo $kalimat[0];
echo "<br>";

// menambahkan element array di tengah coding
echo "<h2>Menambahkan element array di pertengahan coding</h2>";
var_dump($nama);
$nama [] = "handis";
echo "<br>";
var_dump($nama);
?>