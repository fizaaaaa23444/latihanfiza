<!DOCTYPE html>
<html>
<head>
     <title>latihan4d.php</title>
     <style>
        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
            padding: 8px;
            text-align: left;
        }
    </style>
</head>
<body>
    <?php
    // array multudimensi yang berisi negara, ibukota, dan kode telepon 
    $negara_asean = [
        "indonesia" => ["ibukota" => "D.K.I jakarta", "kode telepon" => "+62"] ,
        "singapura" => ["ibukota" => "singapura", "kode telepon" => "+65"]  ,
        "malyasia"  => ["ibukota" => "kuala lumpur", "kode telepon" => "+60"]  ,
    ];
    
    echo "<h3> daftar negara ASEAN, ibukota, dan kode telepon:</h3>";
    echo "<table>";
    echo "<tr><th>negara</th><th>ibukota</th><th>kode telepon</th><th>";
    foreach ($negara_asean as $negara => $info) {
        echo "<tr>";
        echo "<td>$negara</td>";
        echo "<td>{$info['ibukota']}</td>";
        echo "<td>{$info['kode telepon']}</td>";
        echo "</tr>";
    }
    echo "</table>" ;
    ?>
</body>
</html>       