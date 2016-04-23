<?php

namespace Bitwisdom\Reviews;

class Restaurant {
    
    /**
     *
     * @var string
     */
    private $name;
    
    /**
     * 
     * @param string $name
     */
    public function __construct(string $name) {
        $this->name = $name;
    }
    
    /**
     * 
     * @return string
     */
    public function getName() {
        return $this->name;
    }

    /**
     * 
     * @param string $name
     */
    public function setName(string $name) {
        $this->name = $name;
    }

}
