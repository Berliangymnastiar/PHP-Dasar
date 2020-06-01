<?php
$buku = [
    [
        "judul" => "11.11",
        "pengarang" => "Fiersa Besari",
        "penerbit" => "Media Kita",
        "harga" => "Rp.69.000"
    ],
    [
        "judul" => "Sebuah Seni Untuk Bersikap Bodoamat",
        "pengarang" => "Max",
        "penerbit" => "BIP",
        "harga" => "Rp.95.000"
    ]
]
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Daftar Penjualan Buku</title>
</head>

<body>
    <h1>Menu Buku</h1>

    <?php foreach ($buku as $b) : ?>
        <ul>
            <li><?php echo $b["judul"]; ?></li>
            <li><?php echo $b["pengarang"]; ?></li>
            <li><?php echo $b["penerbit"]; ?></li>
            <li><?php echo $b["harga"]; ?></li>

        </ul>
    <?php endforeach; ?>
</body>

</html>