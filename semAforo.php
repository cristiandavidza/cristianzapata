<html>
<head>
    <title>Problema</title>
</head>
<body>
<?php
$color = rand(1, 3);
echo $color;
echo "<br>";

if ($color == 1) {
    echo "Rojo: Alto";
}
if ($color == 2) {
    echo "Amarillo: Precaución";
}
if ($color == 3) {
    echo "Verde: Siga";
}
?>
</body>
</html>
