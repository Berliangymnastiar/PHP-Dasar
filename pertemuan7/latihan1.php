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
    <title>GET</title>
</head>

<body>
    <h1>Daftar Buku</h1>
    <ul>
        <?php foreach ($buku as $b) : ?>
            <li>
                <a href="latihan2.php?judul=<?php echo $b["judul"]; ?>
                &pengarang=<?php echo $b["pengarang"]; ?>
                &penerbit=<?php echo $b["penerbit"];
                                ?>&harga=<?php echo $b["harga"]; ?>">
                    <?php echo $b["judul"]; ?></a>
            </li>
        <?php endforeach; ?>
    </ul>
</body>

</html>