<html>
<head></head>
<body>
<?php
$num=10;
echo $num;
echo "<br>";
if ($num >= 1 && $num <= 50) {
echo"esta entre 1 y 50";
}else{
echo"esta entre 50 y 100";
    } 
if ($num >= 1 && $num <= 25) {
        echo "esta entre 1 y 25";
}
if ($num >= 18 && $num <= 30) {
        echo "Joven";
}
if ($num >= 31 && $num <= 55) {
        echo "Adulto";
}
if ($num >=56){
        echo "Adulto mayor";
    }
echo $num;

?>
</body>
</html>
