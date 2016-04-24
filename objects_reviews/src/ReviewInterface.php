<?php

namespace Bitwisdom\Reviews;

use Bitwisdom\Reviews\Business;

interface ReviewInterface {
    
    /**
     * @return Business
     */
    public function getBusiness();
    
    /**
     * @return string
     */
    public function getDisplayString();
}
