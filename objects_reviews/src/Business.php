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
    protected $name;
    
    /**
     *
     * @var string
     */
    private $type;
    
    /**
     * 
     * @param string $name
     */
    public function __construct(string $name, string $type) {
        $this->name = $name;
        $this->type = $type;
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
    
    public function getType() {
        return $this->type;
    }

    public function setType($type) {
        $this->type = $type;
    }



}