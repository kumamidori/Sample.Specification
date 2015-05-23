<?php

namespace Sample\Specification\Order\Specification;

use Sample\Specification\Order\Entity\Order;
use Sample\Specification\Test\OrderTestBase;

class AvailableCustomerSpecificationTest extends OrderTestBase
{
    /**
     * @dataProvider providerValidOrder
     */
    public function testIsSatisfiedByCaseWhiteCustomer(Order $order)
    {
        $this->assertTrue((new AvailableCustomerSpecification())->isSatisfiedBy($order));
    }

    /**
     * @dataProvider providerBlackListCustomerOrder
     */
    public function testIsSatisfiedByCaseBlackCustomer(Order $order)
    {
        $this->assertFalse((new AvailableCustomerSpecification())->isSatisfiedBy($order));
    }
}
