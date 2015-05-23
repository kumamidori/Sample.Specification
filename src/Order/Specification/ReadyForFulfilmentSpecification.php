<?php
namespace Sample\Specification\Order\Specification;

use Sample\Specification\Common\Specification\AbstractSpecificationCollection;

/**
 * 注文可能仕様
 */
class ReadyForFulfilmentSpecification extends AbstractSpecificationCollection
{
    public function __construct()
    {
        $this->add(new ValidSpecification());
        $this->add(new ApprovedSpecification());
        $this->add(new AvailableCustomerSpecification());
        $this->add(new InStockSpecification());
    }
}
