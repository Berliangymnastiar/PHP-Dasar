<?php
$mahasiswa = [
    ["Berlian Gymnastiar", "0989393", "Teknik
            Informatika", "Berlian@ITB.ac.id"],
    ["Rahmat", "0989341", "Teknik
            Informatika", "Rahmat@ITB.ac.id"]

];
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
            <li>Nama :<?php echo $mhs[0]; ?></li>
            <li>NRP :<?php echo $mhs[1]; ?></li>
            <li>Jurusan :<?php echo $mhs[2]; ?></li>
            <li>Email :<?php echo $mhs[3]; ?></li>
        </ul>
    <?php endforeach; ?>
</body>

</html>