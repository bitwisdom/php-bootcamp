<?php

namespace Bitwisdom\Reviews;

use Bitwisdom\Reviews\Restaurant;

class Review {
    
    /**
     *
     * @var int 
     */
    private $score;
    
    /**
     *
     * @var Restaurant
     */
    private $restaurant;
    
    /**
     * 
     * @param int $score
     * @param Restaurant $restaurant
     */
    public function __construct(int $score, Restaurant $restaurant) {
        $this->score = $score;
        $this->restaurant = $restaurant;
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
     * @return Restaurant
     */
    public function getRestaurant() {
        return $this->restaurant;
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
     * @param Restaurant $restaurant
     */
    public function setRestaurant(Restaurant $restaurant) {
        $this->restaurant = $restaurant;
    }    

}