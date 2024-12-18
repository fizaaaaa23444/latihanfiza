<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan3a</title>
    <style>
        .ganti-style {
            font-size: 28px;
            font-family: arial, sans-serif;
            color: #1A0547;
            font-style: italic;
            font-weight: bold;
        }
    </style>
</head>
<body>
    
<?php
// fungsi untuk menambahkan kelas pada tulisan
function ganti_style ($tulisan, $kelas) {
    return "<p class='$kelas'>$tulisan</p>";
}

// inisialisasi  variabel
$tulisan = "hello world! here i come!";
$kelas = "ganti-style";

// menampilkkan hasil
echo ganti_style($tulisan, $kelas);
?>
</body>
</html>