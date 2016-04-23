<?php

include 'bootstrap.php';

?>

<html>
    <head>
        <title>Restaurant Reviews</title>
    </head>
    <body>
        <?php foreach ($restaurants as $i => $restaurant): ?>
            <h2><?php print $restaurant->getName(); ?></h2>
            <?php foreach ($reviews as $review): ?>
                <?php if ($review->getRestaurant() == $restaurant): ?>
                    <div>Score: <?php print $review->getScore(); ?></div>
                <?php endif; ?>
            <?php endforeach; ?>
        <?php endforeach; ?>
    </body>
</html>