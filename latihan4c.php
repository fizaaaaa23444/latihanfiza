<!DOCTYPE html>
<html>
<head>
     <title>Latihan4c.php</title>
</head>
<body>
    <?php
    // daftar negara ASEAN beserta ibu kotanya
    $negara_asean = [
        "indonesia" => "D.K.I Jakarta",
        "Singapura" => "Singapura",
        "Malaysia"  => "Kuala Lumpur",
        "Brunei"    => "Bandar Seri Begawan",
        "thailand"  => "Bangkok",
        "Laos"      => "Vientiane",
        "Filipina"  => "Munila",
        "Myanmar"   => "Naypyidaw"
    ];
    
    echo "<h3>daftar nama negara ASEAN dan ibu kotanya :</h3>";
    echo "<ul>";
    foreach ($negara_asean as $negara => $ibukota) {
        echo "<li> $negara : $ibukota </li>";
    }
    echo "</ul>" ;
    ?>
 </body>
 </html>      


