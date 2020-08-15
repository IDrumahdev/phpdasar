<?php

    // ini adalah komentar
    // ini juga komentar

    /*
    ini komentar
    yang bisa banyak line.
    */

    // Pertemuan 2 - PHP Dasar
    // sintaks PHP

    // Standar output -> mencetak sesuatu di layar
    //  echo, print -> mencetak variabel.
    // print_r -> mencetak array
    // var_dump -> melihat ini dari variabel. print_r dan var_dump untuk debuging.

    // echo "ibnudirsan";
    // print "ibnudirsan"; //string
    // print_r ("ibnudirsan");
    // var_dump ("ibnudirsan"); // memberikan informasi berupa type data dan ukuran.

    // echo 756; //cetak int
    // echo true; // cetak angka 1 (bolean)
    // echo false; // cetak kosong (bolean)


    // penulisan syntak PHP
    // 1. PHP di dalam HTML.
    // 2. HTML di dalam PHP //tidak di sarankan.

    // variabel dan type data
    // variabel : cukup menuliskan $namavariabel
    // nama nya tidak boleh di awali angka tapi boleh mengandung anggka
    // $1nama (tidak boleh) tapi $nama1 (boleh).

    $nama = "Abu Ahsan";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar PHP</title>
</head>
<body>

<h1>Hallo Selamat Datang <?php echo $nama; ?></h1>
<p><?php echo "ini adalah sebuah paragraf"; ?></p>

<?php
    echo '<h1>  Hallo Word ! </h>';
?>
    
</body>
</html>