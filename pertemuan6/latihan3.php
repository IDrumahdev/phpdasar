<?php

// Array Numerik
// contoh :
// $mahasiswa = [
//                 ["Heri Purwanto",11010091,"ibnudirsan@gmail.com","Manajemen Informatika"],
//                 ["Ummu Ahsan",11010090,"ummuahsan@gmail.com","Manajemen Informatika"],
//                 ["Ahsan",11010092,"ahsan@gmail.com","Manajemen Informatika"],
// ];

// Array Associative
// Yaitu Variabel yang mempunyai banyak data berupa key dan value, namun key nya bukan index tapi string yang bisa di buat custom.
// contoh :
$wakif = [ 
                    [
                        "idwakif"=>11010091,
                        "nama"=>"Heri Purwanto",
                        "email"=>"ibnudirsan@gmail.com",
                        "nohp"=>"085310131411",
                        "gambar"=>"av1.JPG",
                    ],
                    [
                        "nama"=>"Ummu Ahsan",
                        "idwakif"=>11010090,
                        "email"=>"ummuahsan@gmail.com",
                        "nohp"=>"08176078756",
                        "gambar"=>"av2.JPG",
                    ],
                    [
                        "nama"=>"Ahsan",
                        "idwakif"=>11010092,
                        "email"=>"ahsan@gmail.com",
                        "nohp"=>"085310131411",
                        "gambar"=>"av3.PNG",
                    ],
                    [
                        "nama"=>"Aisyah",
                        "idwakif"=>11010092,
                        "email"=>"ahsan@gmail.com",
                        "nohp"=>"08176078756",
                        "gambar"=>"av3.PNG",
                    ]
            ];

            // echo $wakif[1]["email"];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Wakif</title>
</head>
<body>
<h1>Daftar Wakif</h1>
    <?php foreach ($wakif as $wkf) :?>
        <ul>
                <li>
                    <img src="img/<?= $wkf["gambar"]; ?>">
                </li>
                <li>Nama: <?= $wkf["nama"]; ?></li>
                <li>Kode Wakif<?= $wkf["idwakif"]; ?></li>
                <li>Email<?= $wkf["email"]; ?></li>
                <li>Nomor Handphone<?= $wkf["nohp"]; ?></li>
        </ul>
    <?php endforeach; ?>
</body>
</html>