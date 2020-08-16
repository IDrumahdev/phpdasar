<?php

function salam($waktu="Datang", $nama="admin"){

    return "Selamat $waktu, $nama";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar Function</title>
</head>
<body>
    <h1><?php echo salam("Pagi","ibnudirsan"); ?></h1>
</body>
</html>