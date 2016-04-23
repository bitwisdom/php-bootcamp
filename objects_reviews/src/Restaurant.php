<?php

namespace Bitwisdom\Reviews;

use Bitwisdom\Reviews\Business;

class Restaurant extends Business {
    
    /**
     *
     * @var string
     */
    private $style;
    
    
    public function __construct(string $name, string $style) {
        parent::__construct($name, "Restaurant");
        $this->style = $style;
    }

    
    /**
     * 
     * @return string
     */
    public function getStyle() {
        return $this->style;
    }

    /**
     * 
     * @param string $style
     */
    public function setStyle(string $style) {
        $this->style = $style;
    }

    /**
     * 
     * @return string
     */
    public function getName() {
        return $this->name . ' (' . $this->style . ')';
    }
    
}
