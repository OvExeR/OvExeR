<!-- Cara penulisan syntax array -->
<!-- Dengan cara lama -->
<?php
$hari = array("Senin","Selasa","Rabu");
?>
<!-- Dengan cara Baru -->
<?php
$bulan = ["Januari", "Februari", "Maret"];
?>
<!-- Menulis array dengan tipe data integer, string, boolean -->
<?php
$arr = [100, "Lugas", false];
?>
<!-- Menulis arra Multidimensi / array di dalam array -->
<?php
$data = [
    ["Lugas"],
    ["Basri"],
    ["Afif"],
]
?>
<!-- Penulisan array di dalam array -->
<?php
$arrinarr = [
    [1,2,3],
    [4,5,6],
    [7,8,9],
]
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PENULISAN ARRAY</title>
    <style>
        .kotak{
            width:100px;
            height:100px;
            background-color:cyan;
            line-height:100px;
            margin:3px;
            float:left;
            text-align:center;
            transition:1s;
        }
        .kotak:hover{
            transform:rotate(360deg);
            border-radius:50%;
        }
        .clear{
            clear:both;
        }
    </style>
</head>
<body>
<h3>Penulisa dengan cara lama</h3>
<?php foreach( $hari as $hr ): ?>
    <div class="kotak"><?= $hr;  ?></div>
<?php endforeach;?>
<div class="clear"></div>
<h3>Penulisa dengan cara baru</h3>
<?php foreach( $bulan as $bln ): ?>
    <div class="kotak"><?= $bln;  ?></div>
<?php endforeach;?>
<div class="clear"></div>
<h3>Penulisa dengan tipe data berbeda </h3>
<?php foreach( $arr as $ar ): ?>
    <div class="kotak"><?= $ar;  ?></div>
<?php endforeach;?>
<div class="clear"></div>
<h3>Penulisa array multidimensi </h3>
<?php foreach( $data as $dt ): ?>
    <div class="kotak"><?= $dt[0];  ?></div>
<?php endforeach;?>
<div class="clear"></div>
<h3>Penulisa array di dalam array </h3>
<?php foreach( $arrinarr as $arinar ): ?>
    <?php foreach( $arinar as $arar ): ?>
        <div class="kotak"><?= $arar;  ?></div>
    <?php endforeach; ?>
    <div class="clear"></div>
<?php endforeach;?>
</body>
</html>