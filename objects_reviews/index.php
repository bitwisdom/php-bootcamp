<?php

include 'bootstrap.php';

use Bitwisdom\Reviews\Restaurant;
use Bitwisdom\Reviews\Review;

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
                    <div>Score: <?php print $review->getScore(); ?>
                    of <?php print Review::MAX_SCORE; ?>.</div>
                <?php endif; ?>
            <?php endforeach; ?>
        <?php endforeach; ?>
        
       <p>
           <?php print Restaurant::$restaurantCount; ?> total restaurants.
       </p>
    </body>
</html>