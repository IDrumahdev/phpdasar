<?php

    $mahasiswa = ["Heri Purwanto",11010091,"Manajemen Informatika","ibnudirsan@gmail.com"];


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
</head>
<body>
    
    <!-- dengan Perulangan Foreach -->
    <ul>
            <?php  foreach ($mahasiswa as $mhs) : ?>
                <li>
                    <?php echo $mhs; ?>
                </li>
            <?php endforeach; ?>
    </ul>

<!-- dengan echo manual  -->
    <ul>
            <li><?= $mahasiswa[0]; ?></li>
            <li><?= $mahasiswa[1]; ?></li>
            <li><?= $mahasiswa[2]; ?></li>
            <li><?= $mahasiswa[3]; ?></li>
    </ul>

</body>
</html>