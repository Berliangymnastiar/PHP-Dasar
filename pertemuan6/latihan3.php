<!-- array associative
Definisi-nya sama dengan array numerik, kecuali
Indexnya adalah string yang kita buat sendiri -->

<?php
$mahasiswa = [
    [
        "nama" => "Berlian Gymnastiar",
        "nrp"  => "09213",
        "email" => "Berlian@ITB.ac.id",
        "jurusan" => "Teknik Informatika"
    ],
    [
        "nama" => "Rahmat",
        "nrp" => "09215",
        "email" => "rahmat@gmail.com",
        "jurusan" => "Teknik Industri",
    ]
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
            <li><?php echo $mhs["nama"]; ?></li>
            <li><?php echo $mhs["nrp"]; ?></li>
            <li><?php echo $mhs["jurusan"]; ?></li>
            <li><?php echo $mhs["email"]; ?></li>
        </ul>
    <?php endforeach; ?>

</body>

</html>