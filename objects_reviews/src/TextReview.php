<?php

namespace Bitwisdom\Reviews;

use Bitwisdom\Reviews\Business;
use Bitwisdom\Reviews\ReviewInterface;

class TextReview implements ReviewInterface {
    
    /**
     *
     * @var string
     */
    private $text;
    
    /**
     *
     * @var Business
     */
    private $business;
    
    public function __construct($text, Business $business) {
        $this->text = $text;
        $this->business = $business;
    }

    /**
     * 
     * @return string
     */
    public function getText() {
        return $this->text;
    }

    /**
     * 
     * @param string $text
     */
    public function setText($text) {
        $this->text = $text;
    }

        
    /**
     * 
     * @return Business
     */
    public function getBusiness() {
       return $this->business; 
    }

    /**
     * 
     * @return string
     */
    public function getDisplayString() {
        return "Comment: " . $this->text;
    }

    
}
