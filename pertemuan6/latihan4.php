<?php
$buku = [
    [
        "judul" => "Konspirasi Alam Semesta",
        "pengarang" => "Fiersa Besari",
        "penerbit" => "Media Kita",
        "harga" => "64.000"
    ],
    [
        "judul" => "Time's is you life",
        "pengarang" => "Rando Kim",
        "penerbit" => "BIP",
        "harga" => "74.000"
    ]
];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Buku</title>
</head>

<body>
    <h1>Data Buku</h1>

    <?php foreach ($buku as $b) : ?>
        <ul>
            <li>Judul : <?php echo $b["judul"]; ?></li>
            <li>Pengarang : <?php echo $b["pengarang"]; ?></li>
            <li>Penerbit : <?php echo $b["penerbit"]; ?></li>
            <li>Harga : <?php echo $b["harga"]; ?></li>
        </ul>
    <?php endforeach; ?>
</body>

</html>