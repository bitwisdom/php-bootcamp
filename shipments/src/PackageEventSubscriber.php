<?php

namespace Bitwisdom\Deliveries;

use Doctrine\ORM\Events;
use Doctrine\Common\EventSubscriber;
use Doctrine\Common\Persistence\Event\LifecycleEventArgs;
use Bitwisdom\Deliveries\Package;
use Monolog\Logger;

class PackageEventSubscriber implements EventSubscriber
{
    
    /**
     *
     * @var Logger
     */
    private $logger;
    
    public function __construct(Logger $logger) {
        $this->logger = $logger;
    }
    
    public function getSubscribedEvents()
    {
        return array(
            Events::postUpdate,
        );
    }

    public function postUpdate(LifecycleEventArgs $args)
    {
        $entity = $args->getObject();
        $entityManager = $args->getObjectManager();

        if ($entity instanceof Package) {
            $this->logger->info("Updated package", [
                    'tracking_number' => $entity->getTrackingNumber(),
                    'delivered' => $entity->getDelivered()->format('Y-m-d'),
                ]
            );
        }
    }
}
