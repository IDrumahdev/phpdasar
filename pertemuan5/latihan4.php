<?php

    // $mahasiswa = ["Heri Purwanto",11010091,"Manajemen Informatika","ibnudirsan@gmail.com"];
    // Jika jumlah array nya lebih dari satu maka gunakan array multi dimensi. array di dalam array
    $mahasiswa = [
                    ["Heri Purwanto",11010091,"Manajemen Informatika","ibnudirsan@gmail.com"],
                    ["Ummu Ahsan",11010090,"Manajemen Informatika","ummuahsan@gmail.com"],
                    ["Ahsan",11010092,"Manajemen Informatika","ahsan@gmail.com"],
                ];
    // dengan cara ini urutan datanya tidak boleh salah.
    // dengan cara ini menggunakan array numerik yaitu array dengan menggunakan index nya angka. di mulai dari nol. 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
</head>
<body>


<!-- cetak array multi dimensi  -->
<?php  foreach ($mahasiswa as $mhs) : ?>
    <ul>
            <li>Nama: <?= $mhs[0]; ?></li>
            <li>NIM: <?= $mhs[1]; ?></li>
            <li>Jurusan: <?= $mhs[2]; ?></li>
            <li>Email: <?= $mhs[3]; ?></li>
    </ul>
<?php endforeach; ?>

</body>
</html>