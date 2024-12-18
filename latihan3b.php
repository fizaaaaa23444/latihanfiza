<?php
$var1 = "hello world";
$var2 = null;

echo isset($var1) ? 'var1 is set' : 'var1 is not set'; // output: ver1 is set
echo "<br>";
echo isset($var2) ? 'var2 is set' : 'var2 is not set'; // output: ver2 is not set
?>

<?php
$var1 = "";
$var2 = "not empty";

echo empty($var1) ? 'var1 is empty' : 'ver1 is not empty'; // output: var1 is empty
echo "<br>";
echo empty($var2) ? 'var2 is empty' : 'ver2 is not empty'; // output: ver2 is not empty
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan3a</title>
</head>
<body>
    
<?php
$var1 = "hello world";
$var2 = "";
$var3 = null;
$var4 = 0;

// contoh penggunaan insset ()
echo empty($var1) ? 'var1 is empty' : 'ver1 is not empty'; // output: var1 is empty
echo "<br>";
echo empty($var3) ? 'var1 is empty' : 'ver3 is not empty'; // output: var3 is not empty
echo "<br>";

// contoh penggunaan empty ()
echo empty($var2) ? 'var1 is empty' : 'ver2 is not empty'; // output: var2 is empty
echo "<br>";
echo empty($var4) ? 'var1 is empty' : 'ver4 is not empty'; // output: var4 is empty
echo "<br>";
?>

</body>
</html>
