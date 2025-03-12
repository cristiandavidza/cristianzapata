<html>
<head>
    <title>Problema</title>
</head>
<body>
<?php
$num = rand(-50, 50);
echo $num;
echo "<br>";

if ($num > 0) {
    echo "Positivo";
}
if ($num < 0) {
    echo "Negativo";
}
if ($num == 0) {
    echo "Cero";
}
?>
</body>
</html>
