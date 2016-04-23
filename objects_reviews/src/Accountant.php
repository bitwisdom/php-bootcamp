<?php

namespace Bitwisdom\Reviews;

use Bitwisdom\Reviews\Business;

class Accountant extends Business {
    
    /**
     *
     * @var bool
     */
    private $isCPA;
    
    public function __construct(string $name, bool $isCPA) {
        parent::__construct($name, "Accountant");
        $this->isCPA = $isCPA;
    }

    /**
     * 
     * @return string
     */
    public function getName() {
        $output = parent::getName();
        if ($this->isCPA) {
            $output .= ' (CPA)';
        }
        return $output;
    }

}