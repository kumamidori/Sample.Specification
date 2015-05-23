<?php
namespace Sample\Specification\Order\Entity;

use PHPMentors\DomainKata\Entity\EntityInterface;

abstract class AbstractItem implements EntityInterface
{
    protected $itemCode;
}
