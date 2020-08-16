<?php

// Date
// Untuk menampilkan tanggal dengan format tertentu
    // echo date("l,d-M-Y");

// Time
// UNIX Timestamp / EPOCH time
// detik yang sudah berlalu sejak 1 januari 1970
//    echo time();

// echo date("l, d M Y", time()-((60*60*24)*100));

// mktime
// membuat sendiri detik
// mktime(0,0,0,0,0,0)
// jam , menit, detik, bulan,tanggal, tahun
// echo date("l", mktime(0,0,0,5,7,1991));


// strtotime

echo date("l", strtotime("07 May 1991"));

function dataku(){

}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>