<?php
require 'functions.php';

if(isset($_POST["submit"])){

        // var_dump($_POST);
        // var_dump($_FILES["gambar"]["name"]);
        //  die;

        if(tambah($_POST) > 0 ) {
            echo    "
                        <script>
                            alert('Data Berhasil ditambahkan');
                            document.location.href = 'index.php'
                        </script>
                    ";
        } else {
            echo "                       
                    <script>
                        alert('Data Gagal ditambahkan');
                        document.location.href = 'index.php'
                    </script>
                ";
        }

}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Wakif</title>
</head>
<body>
    
    <h1>Tambah Data Wakif</h1>

    <form action="" method="post" enctype="multipart/form-data">
    
        <ul>
                <li>
                        <label for="idwakif">Code :</label>
                        <input type="text" name="idwakif" id="idwakif" required>
                </li>

                <li>
                        <label for="nama">Nama:</label>
                        <input type="text" name="nama" id="nama" required>
                </li>

                <li>
                    <label for="email">email:</label>
                    <input type="email" name="email" id="email" required>
                </li>

                <li>
                    <label for="nohp">No.HP</label>
                    <input type="text" name="nohp" id="nohp" required>
                </li>
        
                <li>
                    <label for="gambar">Gambar:</label>
                    <input type="file" name="gambar" id="gambar" required>
                </li>

                <li>
                        <button type="submit" name="submit">Tambah Data</button>
                </li>
        </ul>
    
    

    </form>

</body>
</html>