<?php

namespace Bitwisdom\Reviews;

use Bitwisdom\Reviews\Business;
use Bitwisdom\Reviews\ReviewInterface;

class ScoreReview implements ReviewInterface {
    
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
    
    /**
     * @return string
     */
    public function getDisplayString() {
        return 'Score: ' . $this->score . ' of ' . self::MAX_SCORE;
    }

}