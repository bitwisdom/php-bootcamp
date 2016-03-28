<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$cans = 5;
?>
<html>
  <head>
    <title>
      Soup report
    </title>
  </head>
  <body>
    <?php if ($cans > 14): ?>
      Who bought all this soup?
    <?php elseif ($cans > 7): ?>
      Don't forget to eat your soup.
    <?php else: ?>
      Household in soup crisis.
    <?php endif; ?>
  </body>
</html>
