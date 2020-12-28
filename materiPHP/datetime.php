<?php
echo "<h1>Menunjukan Waktu Sekarang Dengan Function date()</h1>";
echo date("l" );
?>

<?php
echo "<h1>Mengetahui 10 Hari Kedepan Dengan Function time()</h1>";
echo date("l, d M Y", time()+60*60*24*10);
?>
<?php
// format penulisan (0,0,0,0,0,0) 
// (Jam, Menit, Detik, Bulan, Tanggal, Tahun)
echo "<h1>Mengetahui Hari Dan Tanggal Lahir Dengan Function mktime()</h1>";
echo date("l, d M Y", mktime(0,0,0,3,28,2003));
?>
<?php
echo "<h1>Mengetahui Hari Dan Tanggal Lahir Dengan Function strtime()</h1>";
echo date("l, d M Y", strtotime("28 march 2003"));
?>
<?php
function sapa($waktu, $nama = "Lugas"){
    return "Selamat $waktu $nama";
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1><?= sapa("Pagi", "Lugas");?></h1>
</body>
</html>