<?php

function get_count() {
  global $count;
  if (!isset($count)) {
      $count = 0;
  }
  $count++;
  return $count;
}


$count = $_GET['start_count'];

?>

<html>
  <body>
      Hello <?php print $_GET['name']; ?>
    The count is <?php print get_count(); ?>.
    The count is <?php print get_count(); ?>.
  </body>
</html>