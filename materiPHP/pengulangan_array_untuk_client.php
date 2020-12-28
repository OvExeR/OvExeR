<?php
$nama = ["lugas", "afif","basri", "handis",];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PENGULANGAN ARRAY UNTUK CLIENT</title>
</head>
<style>
        .kotak{
            height:50px;
            width:50px;
            background-color:cyan;
            text-align:center;
            line-height:50px;
            margin:3px;
            float:left;
        
        .clear{
            clear:both;
        }
        }
</style>
<body>
<!-- Pengulangan dengan for -->
<?php for($i = 0; $i < count($nama); $i++){ ?>
    <div class="kotak"> <?php echo $nama[$i];?>
    <?php } ?>
    </div>
<div class="clear"></div>
<!-- Pengulangan dengan foreach -->
<?php foreach($nama as $n):?>
<div class="kotak">
        <?php echo $n;?>
<?php endforeach; ?>
</div>
    
</body>
</html>