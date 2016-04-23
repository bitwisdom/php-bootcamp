<?php

namespace Bitwisdom\Reviews;

class Business {
    
    /**
     *
     * @var int
     */
    private static $businessCount = 0;
    
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
        self::$businessCount++;
    }
    
    /**
     * 
     * @return int
     */
    public static function getBusinessCount() {
        return self::$businessCount;
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