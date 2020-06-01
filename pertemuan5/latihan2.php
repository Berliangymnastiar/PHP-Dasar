<?php
//pengulangan pada array
//for / foreach
$angka = [3, 7, 12, 14, 21, 17, 23]
?>
<br>
<?php $hewan = ["kucing", "anjing", "rusa", "gajah"] ?>
<!DOCTYPE html>
<html lang="en">;

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Latihan 2</title>
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

    <?php for ($a = 0; $a < count($angka); $a++) { ?>
        <div class="kotak"> <?php echo $angka[$a]; ?> </div>
    <?php } ?>
    <br>
    <div class="clear"></div>
    <br>
    <?php foreach ($angka as $i) { ?>
        <div class="kotak"><?php echo $i; ?> </div>
    <?php } ?>
    <br>
    <div class="clear"></div>
    <br>
    <?php foreach ($angka as $i) : ?>
        <div class="kotak"><?php echo $i; ?> </div>
    <?php endforeach; ?>
    <br>
    <div class="clear"></div>
    <?php foreach ($hewan as $b) : ?>
        <div class="kotak"><?php echo $b; ?> </div>
    <?php endforeach; ?>
</body>

</html>