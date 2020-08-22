<?php

require_once __DIR__ . '/vendor/autoload.php';


// memanggil file function
require 'functions.php';

// memanggil finction query.
$wakifs = query("SELECT * FROM wakif");


$mpdf = new \Mpdf\Mpdf();

$html = 
'
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Wakif</title>
</head>
<body>

    <h1>Daftar Wakif</h1>
    <link rel="stylesheet" href="css/print.css">

    <table border="1" cellpadding="10" cellspacing="0">

            <tr>
                    <th>No.</th>
                    <th>Gambar</th>
                    <th>Code Wakif</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>No.HP</th>
            
            </tr>';

            $i=1;
            foreach ($wakifs as $row) {
                $html .= 
                '
                <tr>
                        <td>'.$i++.'</td>
                        <td><img src="img/'. $row["gambar"] .'" width="50"></td>
                        <td>'. $row["idwakif"] .'</td>
                        <td>'. $row["nama"] .'</td>
                        <td>'. $row["email"] .'</td>
                        <td>'. $row["nohp"] .'</td>
                </tr>

                ';
            }


$html .=  '</table>
    
</body>
</html>

';
$mpdf->WriteHTML($html);
$mpdf->Output('Daftar-Wakif.pdf', \Mpdf\Output\Destination::INLINE);