<html>
<head></head>
<body>
<?php
$num=rand(1,100);
echo $num;
echo "<br>";
    if ($num >= 1 && $num <= 12) {
        echo "Niño";
    } 
if ($num >= 13 && $num <= 17) {
        echo "Adolescente";
}
if ($num >= 18 && $num <= 64) {
        echo "Adulto";
}
if ($num >=65){
        echo "Adulto mayor";
    }
?>
</body>
</html>
