<?php

namespace Bitwisdom\Reviews;

use Bitwisdom\Reviews\Business;

class Plumber extends Business {
    
    public function __construct(string $name) {
        parent::__construct($name, "Plumber");
    }

    
}
