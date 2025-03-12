<html>
<head>
    <title>Problema</title>
</head>
<body>
<?php
$velocidad = rand(10, 180);
echo $velocidad;
echo "<br>";

if ($velocidad < 30) {
    echo "Vehículo muy lento";
}
if ($velocidad >= 30 && $velocidad <= 80) {
    echo "Velocidad normal";
}
if ($velocidad >= 81 && $velocidad <= 120) {
    echo "Velocidad rápida";
}
if ($velocidad > 120) {
    echo "¡Exceso de velocidad!";
}
?>
</body>
</html>
