<html>
<head>
    <title>Problema 12</title>
</head>
<body>
<?php
$ano = rand(1900, 2100);
echo $ano;
echo "<br>";

if (($ano % 4 == 0 && $ano % 100 != 0) || ($ano % 400 == 0)) {
    echo "Bisiesto";
} else {
    echo "No es bisiesto";
}
?>
</body>
</html>
