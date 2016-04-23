<?php

namespace Bitwisdom\Reviews;

use Bitwisdom\Reviews\Business;

class Review {
    
    const MAX_SCORE = 10;
    
    /**
     *
     * @var int 
     */
    private $score;
    
    /**
     *
     * @var Business
     */
    private $business;
    
    /**
     * 
     * @param int $score
     * @param Business $business
     */
    public function __construct(int $score, Business $business) {
        $this->score = $score;
        $this->business = $business;
    }

    /**
     * 
     * @return int
     */
    public function getScore() {
        return $this->score;
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
     * @param int $score
     */
    public function setScore(int $score) {
        $this->score = $score;
    }

    /**
     * 
     * @param Business $business
     */
    public function setBusiness(Business $business) {
        $this->business = $business;
    }    

}