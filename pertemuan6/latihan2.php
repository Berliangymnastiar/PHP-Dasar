<?php
$mahasiswa = [
    ["Berlian Gymnastiar", "09213", "Berlian@itb.ac.id", "Teknik Informatika"],
    ["Rahmat", "09215", "Rahmat@itb.ac.id", "Teknik Industri"]
]
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Daftar Mahasiswa</title>
</head>

<body>
    <h1>Daftar Mahasiswa</h1>
    <?php foreach ($mahasiswa as $mhs) : ?>
        <ul>
            <li><?php echo $mhs[0]; ?></li>
            <li><?php echo $mhs[1]; ?></li>
            <li><?php echo $mhs[2]; ?></li>
            <li><?php echo $mhs[3]; ?></li>
        </ul>
    <?php endforeach; ?>
</body>

</html>