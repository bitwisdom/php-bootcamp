<?php

include 'bootstrap.php';

use Bitwisdom\Reviews\Restaurant;
use Bitwisdom\Reviews\Review;
use Bitwisdom\Reviews\Business;

?>

<html>
    <head>
        <title>Restaurant Reviews</title>
    </head>
    <body>
        <?php foreach ($businesses as $i => $business): ?>
            <h2><?php print $business->getName(); ?></h2>
            <p><?php print $business->getType(); ?></p>
            <?php foreach ($reviews as $review): ?>
                <?php if ($review->getBusiness() == $business): ?>
                    <div><?php print $review->getDisplayString(); ?></div>
                <?php endif; ?>
            <?php endforeach; ?>
        <?php endforeach; ?>
        
       <p>
           <?php print Business::getBusinessCount(); ?> total businesses.
       </p>
    </body>
</html>