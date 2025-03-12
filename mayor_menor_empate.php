<html>
<head>
<title>Problema</title>
</head>
<body>
<?php
$num1=rand(1,50);
$num2=rand(1,50);
$num3=rand(1,50);
echo$num1;
echo"<br>";
echo$num2;
echo"<br>";
echo$num3;
echo"<br>";
if($num1 > $num2 && $num1 > $num3){
echo"<br>";
echo"$num1 es mayor";
}else{
if($num1 < $num2 && $num1 < $num3){
echo"<br>";
echo"$num1 es menor";
}
}
if($num2 > $num1 && $num2 > $num3){
echo"<br>";
echo"$num2 es mayor";
}else{
if($num2 < $num1 && $num2 < $num3){
echo"<br>";
echo"$num2 es menor";
}
}
if($num3 > $num2 && $num3 > $num1){
echo"<br>";
echo"$num3 es mayor";
}else{
if($num3 < $num2 && $num3 < $num1){
echo"<br>";
echo"$num3 es menor";
}
}
if($num1 == $num2){
echo"<br>";
echo"$num2 y $num1 son iguales";
}
if($num1 == $num3){
echo"<br>";
echo"$num3 y $num1 son iguales";
}
if($num2 == $num3){
echo"<br>";
echo"$num2 y $num3 son iguales";
}
if($num2 == $num3 && $num2 == $num1 ){
echo"<br>";
echo"Todos son iguales";
}
 ?>
</body>
</html>