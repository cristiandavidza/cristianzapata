<html>
<head>
<title>Problema</title>
</head>
<body>
<?php
$num=rand(0,23);
echo$num;
echo"<br>";
if($num>=5 && $num<=11){
echo"¡Buenos dias!";
}else{
if($num>=12 && $num<=18){
echo"¡Buenas tardes!";
}else{
echo"¡Buenas noches!";
}
}
 ?>
</body>
</html>