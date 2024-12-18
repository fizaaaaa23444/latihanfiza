<!DOCTYPE html>
<html>
<head>
    <title>latihan 1c</title>  
    <style>
         table {
             border-collapse: collapse;
             text-align: center;
         }
         td {
            width: 50px;
            height: 50px;
            border: 1px solid black;
         }    
    </style>
 </head>
 <body>  
 
 <?php
 // variabel untuk huruf
 $huruf = array('A', 'B', 'C');

 //mulai tabel
 echo "<table>";

 // baris pertama 
 echo "<tr>";
 echo "<td>". $huruf[0]. "</tb>";
 echo "</tr";

 // baris kedua
 echo "<tr>";
 echo "<td>". $huruf[0] . "</td>";
 echo "<td>". $huruf[1] . "</td>";
 echo "</tr>";

 // baris ketiga
 echo "<tr>";
 echo "<td>" . $huruf[0] . "</td>";
 echo "<td>" . $huruf[1] . "</td>";
 echo "<td>" . $huruf[2] . "</td>";
 echo "</tr>";
 ?>

 </body>
 </html>
 

