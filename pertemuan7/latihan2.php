<?php
//Super Global
// variabel global milik PHP yang berupa Array Associative

// var_dump($_SERVER["SERVER_SOFTWARE"]);

// $_GET

// $_GET["nama"] = "ibnudirsan";
// $_GET["hp"] = "085310131411";

// var_dump($_GET);
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

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GET Data Wakif</title>
</head>
<body>
    <h1>Data Wakif</h1>

        <ul>
    <?php  foreach ($wakif as $key) : ?>
                    <li><a href="latihan3.php?nama=<?= $key["nama"]; ?>&nohp=<?= $key["nohp"]?>&id=<?= $key["idwakif"] ?>&email=<?= $key["email"];?>&img=<?= $key["gambar"]; ?>">
                        <?= $key["nama"]; ?>
                    </li></a>
    <?php endforeach; ?>
        </ul>
</body>
</html>