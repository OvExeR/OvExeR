<?php
// pengulangan dengan "for"
for ( $i =0; $i < 5; $i++ ) {
echo "Lugas <br>";
}

// pengulangan dengan "while"
$i = 0;
while ( $i < 5 ){
    echo "while <br>";
$i++;
}

// Pengulangan dengan "do.. while" dengan nilai true
$i = 0;
do {
    echo "do.. while true<br>";
    $i++;
}while( $i < 5);
// Pengulangan dengan "do.. while" dengan nilai false
$o = 10;
do {
    echo "do.. while false<br>";
    $o++;
}while( $o < 5);

?>