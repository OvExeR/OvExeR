<!-- Variable Scope / Lingkup Variabel -->
<?php 
// Ini adalah Variabel Global
$x = 10;

function tampilX(){
    // Ini adalah Variabel Lokal yang hanya dalam Function
    $x = 100;
    echo $x;

}
tampilX();
echo "<br>";
echo $x;
?>
<?php

$y = 20;

function tampilY(){
    // Ini adalah pemanggilan variabel di luar function
    global $y;
    echo $y;
}
echo"<br>";
tampilY();
?>