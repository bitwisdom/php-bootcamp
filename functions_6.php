<?php

function addOne($y) {
  $y = $y + 1;
  return $y;
}

$x = 5;

?>

<html>
  <body>
    X plus one is <?php 
    
    $x = addOne($x);
    print $x; 
    ?>.
    X plus one is <?php $x = addOne($x);
    print $x;  
    ?>.
  </body>
</html>
