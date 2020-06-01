<?php
if (
    !isset($_GET["judul"]) ||
    !isset($_GET["pengarang"]) ||
    !isset($_GET["penerbit"]) ||
    !isset($_GET["harga"])
) {
    header("Location: latihan1.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Detail Buku</title>
</head>

<body>
    <ul>
        <li><?php echo $_GET["judul"]; ?></li>
        <li><?php echo $_GET["pengarang"]; ?></li>
        <li><?php echo $_GET["penerbit"]; ?></li>
        <li><?php echo $_GET["harga"]; ?></li>
    </ul>
    <a href="latihan1.php">Kembali ke menu utama</a>
</body>

</html>