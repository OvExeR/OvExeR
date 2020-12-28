<!-- tabel tanpan menggunakan pengulangan PHP -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Penulangan Tabel</title>
</head>
<body>
<style>
 .warna{
    background-color : silver;
 }
</style>
<h3>Tanpa Pengulangan</h3>
    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <td>1.1</td>
            <td>1.2</td>
            <td>1.3</td>
            <td>1.4</td>
            <td>1.5</td>
        </tr>
    </table>
    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
        <tr>
            <td>2.1</td>
            <td>2.2</td>
            <td>2.3</td>
            <td>2.4</td>
            <td>2.5</td>
        </tr>
    </table>
<h3>Menggunakan Pengulangan "for" Dengan Tag HTML Di Dalam PHP </h3>
            <!-- tabel dengan menggunakan pengulangan PHP "for"  -->
            <table border="1" cellpadding="10" cellspacing="0">
                <?php
                    for($i = 1; $i <= 3; $i++){
                        echo "<tr>";
                        for ( $j = 1; $j <= 5; $j++){
                            echo "<td>$i,$j</td>";
                        }
                        echo"</tr>";
                    }
                ?>
            </table>
            
<h3>Menggunakan Pengulangan "for" Dengan Tag HTML Di Luar PHP </h3>
            <!-- tabel dengan menggunakan pengulangan PHP "for"  -->
            <table border="1" cellpadding="10" cellspacing="0">
                <?php for( $i = 1; $i <= 3; $i++ ) : ?>
                    <tr>
                        <?php for( $j = 1; $j <= 5; $j++ ) : ?>
                        <td><?php echo "$i,$j"?></td>
                        <?php endfor; ?>
                    </tr>
                <?php endfor;?>
            </table>

<h3>Menggunakan Pengulangan "for" Dengan Tag HTML Di Luar PHP Dan Penentuan Bilangan Ganjil Berwarna Abu Abu </h3>
            <!-- tabel dengan menggunakan pengulangan PHP "for" dan penentuan bilangan ganjil berwarna silver   -->
            <table border="1" cellpadding="10" cellspacing="0">
                <?php for( $i = 1; $i <= 3; $i++ ) : ?>
                <?php if( $i %2 == 1) :?>
                    <tr class="warna">
                <?php else  ?>
                    <tr>
                <?php endif;?>            
                        <?php for( $j = 1; $j <= 5; $j++ ) : ?>
                        <td><?php echo "$i,$j"?></td>
                        <?php endfor; ?>
                    </tr>
                <?php endfor;?>
            </table>
</body>
</html>
