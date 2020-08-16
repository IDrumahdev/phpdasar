<?php
// Variabel Scope / lingkup variabel.
$x = 10; //variabel local

function tampilx(){
    // $x = 20;
    global $x; //variabel global
    echo $x;
}

tampilx();

?>