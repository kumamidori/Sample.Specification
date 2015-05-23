<?php
namespace Sample\Specification\Order\Entity;

class ItemA extends AbstractItem
{
    private $desc;
    private $minPurchaseUnit;

    public function __construct($itemCode, $desc, $minPurchaseUnit)
    {
        $this->itemCode = $itemCode;
        $this->desc = $desc;
        $this->minPurchaseUnit = $minPurchaseUnit;
    }
}
