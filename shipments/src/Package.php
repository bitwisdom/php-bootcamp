<?php

namespace Bitwisdom\Deliveries;

/**
 * @Entity @Table(name="packages")
 **/
class Package {
    
    /**
     * @Id @Column(type="integer") @GeneratedValue
     * @var int
     */
    private $id;
    
    /**
     * @Column(type="integer", name="order_id")
     * @var int 
     */
    private $orderId;
    
    /**
     * @Column(type="string", name="tracking_number")
     * @var string 
     */
    private $trackingNumber;
    
    /**
     * @Column(type="date")
     * @var \DateTime
     */
    private $shipped;
    
    /**
     * @Column(type="date")
     * @var \DateTime
     */
    private $delivered;
    
    /**
     * @Column(type="integer", name="shipping_days")
     * @var int 
     */
    private $shippingDays;

    
    public function getId() {
        return $this->id;
    }

    public function getOrderId() {
        return $this->orderId;
    }

    public function getTrackingNumber() {
        return $this->trackingNumber;
    }

    public function getShipped() {
        return $this->shipped;
    }

    public function getDelivered() {
        return $this->delivered;
    }

    public function getShippingDays() {
        return $this->shippingDays;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function setOrderId($orderId) {
        $this->orderId = $orderId;
    }

    public function setTrackingNumber($trackingNumber) {
        $this->trackingNumber = $trackingNumber;
    }

    public function setShipped(\DateTime $shipped) {
        $this->shipped = $shipped;
    }

    public function setDelivered(\DateTime $delivered) {
        $this->delivered = $delivered;
    }

    public function setShippingDays($shippingDays) {
        $this->shippingDays = $shippingDays;
    }


}
