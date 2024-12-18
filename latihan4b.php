<!DOCTYPE html>
<html>
<head>
<title>Latihan4b.php</title>
</head>
<body>
    <?php
    // Daftar Negara ASEAN Awal
    $negara_asean = ["indonesia", "singapura", "malaysia", "brunei", "thailand"];

    echo "<h3>Daftar Negara ASEAN Awal : </h3>";
    echo "<ul>";
    foreach ($negara_asean as $negara) {
        echo "<li>$negara</li>";

    }
    echo "</ui>";
    
    //menambahkan 3 negara baru ke daftar ASEAN
    array_push($negara_asean, "Laos", "Filipina", "Mnyanmar");

    echo "<h3>Daftar Nama Negara ASEAN Baru :</h3>";
    echo "<ul>";
    foreach ($negara_asean as $negara) {
        echo "<li>$negara</li>";
    }
    echo "</ul>";
    ?>
</body>
</html>       


