<?php

namespace Bitwisdom\Deliveries;

interface ShippingCalculatorInterface {
    
    public function numberOfShippingDays($from, $to);
    
}