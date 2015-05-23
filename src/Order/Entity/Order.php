<?php
namespace Sample\Specification\Order\Entity;

use DateTime;
use PHPMentors\DomainKata\Entity\EntityInterface;

class Order implements EntityInterface
{
    private $orderNo;
    private $orderDate;
    private $customer;
    private $lineItems;

    public function __construct($orderNo, DateTime $orderDate, Customer $customer, LineItemCollection $lineItems)
    {
        $this->orderNo = $orderNo;
        $this->orderDate = $orderDate;
        $this->customer = $customer;
        $this->lineItems = $lineItems;
    }

    /**
     *
     * Read-only access to property objects.
     *
     * @param string $key The name of the property object to read.
     *
     * @return mixed The property object.
     *
     */
    public function __get($key)
    {
        return $this->$key;
    }
}
