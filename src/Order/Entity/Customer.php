<?php
namespace Sample\Specification\Order\Entity;

use PHPMentors\DomainKata\Entity\EntityInterface;

class Customer implements EntityInterface
{
    private $cusId;
    private $name;
    private $category;

    public function __construct($cusId, $name, $category)
    {
        $this->cusId = $cusId;
        $this->name = $name;
        $this->category = $category;
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
