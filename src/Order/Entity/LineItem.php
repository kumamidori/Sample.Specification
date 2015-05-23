<?php
namespace Sample\Specification\Order\Entity;
use PHPMentors\DomainKata\Entity\EntityInterface;

/**
 * 注文明細
 */
class LineItem implements EntityInterface
{
    /**
     * @var AbstractItem
     */
    private $item;
    private $quantity;

    public function __construct(AbstractItem $item, $quantity)
    {
        $this->item = $item;
        $this->quantity = $quantity;
    }
}
