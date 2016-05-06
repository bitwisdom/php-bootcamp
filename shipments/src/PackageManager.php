<?php

namespace Bitwisdom\Deliveries;

use \Doctrine\ORM\EntityManager;
use Bitwisdom\Deliveries\USShippingCalculator;

class PackageManager {
    
    /**
     * @var \Doctrine\ORM\EntityManager
     */
    private $entityManager;
    
    /**
     *
     * @var USShippingCalculator
     */
    private $shippingCalculator;
    
    public function __construct(EntityManager $entityManager) {
        $this->entityManager = $entityManager;
        $this->shippingCalculator = new USShippingCalculator();
    }
    
    public function updatePackage($tracking_number, $delivery_date) {
        $package_repo = $this->entityManager->getRepository('\Bitwisdom\Deliveries\Package');
        $package = $package_repo->findOneBy(['trackingNumber' => $tracking_number]);
        $ship_date = $package->getShipped();
    
        $number_of_shipping_days = $this->shippingCalculator->numberOfShippingDays($ship_date->format('Y-m-d'), $delivery_date);
    
        $package->setDelivered(new \DateTime($delivery_date));
        $package->setShippingDays($number_of_shipping_days);
    
        $this->entityManager->flush();
    }

}
