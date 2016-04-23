<?php

namespace Bitwisdom\Reviews;

class Restaurant {
    
    /**
     *
     * @var int
     */
    private static $restaurantCount = 0;
    
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
        self::$restaurantCount++;
    }
    
    /**
     * 
     * @return int
     */
    public static function getRestaurantCount() {
        return self::$restaurantCount;
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
