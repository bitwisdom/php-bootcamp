<?php

namespace Bitwisdom\Deliveries;

use \Doctrine\ORM\EntityManager;

class PackageManager {
    
    /**
     * @var \Doctrine\ORM\EntityManager
     */
    private $entityManager;
    
    public function __construct(EntityManager $entityManager) {
        $this->entityManager = $entityManager;
    }
    
    public function updatePackage($tracking_number, $delivery_date) {
        $package_repo = $this->entityManager->getRepository('\Bitwisdom\Deliveries\Package');
        $package = $package_repo->findOneBy(['trackingNumber' => $tracking_number]);
        $ship_date = $package->getShipped();
    
        $number_of_shipping_days = $this->numberOfShippingDays($ship_date->format('Y-m-d'), $delivery_date);
    
        $package->setDelivered(new \DateTime($delivery_date));
        $package->setShippingDays($number_of_shipping_days);
    
        $this->entityManager->flush();
    }
    
    private function numberOfShippingDays($from, $to) {
        $shippingDays = [1, 2, 3, 4, 5]; # date format = N (1 = Monday, ...)
        $holidayDays = ['*-12-25', '*-01-01', '*-07-04']; # variable and fixed holidays
        $holidayDays = array_flip($holidayDays);

        $from = new \DateTime($from);
        $to = new \DateTime($to);
        $interval = new \DateInterval('P1D');
        $periods = new \DatePeriod($from, $interval, $to);

        $days = 0;
        foreach ($periods as $period) {
            if (!in_array($period->format('N'), $shippingDays)) {
                continue;
            }
            if (isset($holidayDays[$period->format('Y-m-d')])) {
                continue;
            }
            if (isset($holidayDays[$period->format('*-m-d')])) {
                continue;
            }
            $days++;
        }
        return $days;
    }

}
