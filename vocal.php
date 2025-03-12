<html> 
<head> 
  <title>Problema</title> 
</head>  
<body> 
  <?php 
  $num = rand(1,5); 
  if ($num == 1) { 
    echo "A, es vocal"; 
  } else { 
    if ($num == 2) { 
      echo "E,es vocal"; 
    } else {
 if ($num == 3) { 
      echo "I, es vocal"; 
    } else {
 if ($num == 4) { 
      echo "O, es vocal"; 
   } else { 
      echo "U, es vocal"; 
    } 
    } 
}
  } 