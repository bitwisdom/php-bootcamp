<?php

function get_count() {
  global $count;
  if (!isset($count)) {
      $count = 0;
  }
  $count++;
  return $count;
}


$count = 5;

?>

<html>
  <body>
    The count is <?php print get_count(); ?>.
    The count is <?php print get_count(); ?>.
  </body>
</html>