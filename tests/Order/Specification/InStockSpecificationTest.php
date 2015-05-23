<?php

namespace Sample\Specification\Order\Specification;

use Sample\Specification\Order\Entity\Order;
use Sample\Specification\Test\OrderTestBase;

class InStockSpecificationTest extends OrderTestBase
{
    /**
     * @dataProvider providerValidOrder
     */
    public function testIsSatisfiedBy(Order $order)
    {
        $this->assertTrue((new InStockSpecification())->isSatisfiedBy($order));
    }
}
