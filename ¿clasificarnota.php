<html> 
<head> 
  <title>Problema</title> 
</head>  
<body> 
  <?php 
  $num = rand(0, 100); 
  if ($num >= 0 && $num <= 59) { 
echo $num;
echo "<br>";
    echo "Reprobado"; 
  } else { 
    if ($num >=60 && $num <=79) { 
echo $num;
echo "<br>";
      echo "Aprobado"; 
    } else {
 if ($num >=80 && $num <=89) { 
echo $num;
echo "<br>";
      echo "notable"; 
    } else {
echo $num;
echo "<br>"; 
      echo "Sobresaliente"; 
    } 
    } 
  } 
 
  ?> 
 
</body> 
 
</html>