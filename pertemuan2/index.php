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

    // $nama = "Abu Ahsan";
    // dengan menggunakan kutip dua kita bisa menggunakan konsep dengan namanya interpolasi yaitu dengan menggunakan di dalam string ada variabel apa tidak dan variabel tidak boleh ada spasinya, tidak boleh menggunakan operasi arematika. contoh 

    // echo "Hallo, nama saya $nama";
    
    // jika menggunakan kutip satu, interpolasi nya tidak jalan.
    // echo 'Hallo, nama saya $nama';

    // operator
    // 1. arematika -> + - * / % (modulus adalah sisa bagi)

    // $x = 10;
    // $y = 20;

    // echo $x * $y;

    // 2. operator penggabung string (concatenation/contact) bentuk operatornya . (titik)
    // $nama_depan = "Abu";
    // $nama_belakang = "Ahsan";

    // echo $nama_belakang . " " . $nama_belakang


    // 3. Operator Assigment yaitu : operator penugasan.
    //  = , += , -= , *= , /= , %= dan .=

    //$x= 1; //x awalnya 1
    //$x +=5; // ada variabel x lagi yang depan sama dengannya ada tambah artinya 1 + 5 sehingga variabel yang pertama tidak hilang, jadi di tambahkan.
    // echo $x;

    // $nama ="Abu";
    // $nama .= " ";
    // $nama .= "Ahsan";

    // echo $nama;


    // 4. Operator  perbandingan : < , > , <= , >= , == , !=
    // var_dump(1 == "1"); 
    // == artinya tidak mengecek tipe datanya.

    // untuk mengecek perbandingan menggunakan operator identitas
    // === dan !==

    // var_dump(1 === "1"); 

    // 5. Operator Logika 
    // && AND , || OR  , ! NOT 
    $x = 30;
    var_dump($x < 20 || $x % 2 == 0 );

?>
