<?php

namespace Sample\Specification\Order\Specification;

use Sample\Specification\Order\Entity\Order;
use Sample\Specification\Test\OrderTestBase;

class ValidStockSpecificationTest extends OrderTestBase
{
    /**
     * @dataProvider providerValidOrder
     */
    public function testIsSatisfiedBy(Order $order)
    {
        $this->assertTrue((new ValidSpecification())->isSatisfiedBy($order));
    }
}
