<?php

    // Melakukan pengulangan pada array
    // for / foreach

    $angka = [9,2,5,4,6,10,15,18];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pertemuan 5 Latihan 2</title>

    <style>
                .kotak {
                    width: 50px;
                    height: 50px;
                    background-color: salmon;
                    text-align: center;
                    line-height: 50px;
                    margin: 3px;
                    float: left;
                }
                .clear {
                    clear: both;
                }
    </style>


</head>
<body>
<!-- dengan for -->
    <?php for($i = 0; $i < count($angka); $i++) { ?>

        <div class="kotak"><?= $angka[$i]; ?></div>

    <?php }?>


    <div class="clear"></div>
<!-- dengan Foreach -->
        <?php foreach ($angka as $a) { ?>
            <div class="kotak"><?php echo $a ?></div>
        <?php } ?>

<!-- gaya templating -->
    <div class="clear"></div>

        <?php foreach ($angka as $key) : ?>
                <div class="kotak"><?php echo $key; ?></div>
        <?php endforeach; ?>

</body>
</html>