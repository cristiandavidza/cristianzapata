<html> 
 
<head> 
  <title>Problema</title> 
</head> 
 
<body> 
 
  <?php 
 
  $num = rand(1, 3); 
  if ($num == 1) { 
echo $num;
echo "<br>";
    echo "uno"; 
  } else { 
    if ($num == 2) { 
echo $num;
echo "<br>";
      echo "dos"; 
    } else {
echo $num;
echo "<br>"; 
      echo "tres"; 
    } 
  } 
 
  ?> 
 
</body> 
 
</html>