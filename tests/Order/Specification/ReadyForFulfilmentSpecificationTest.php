<?php
namespace Sample\Specification\Order\Specification;

use Sample\Specification\Test\OrderTestBase;

class ReadyForFulfilmentSpecificationTest extends OrderTestBase
{
    /**
     * @dataProvider providerValidOrder
     */
    public function testAddCaseAllValid($order)
    {
        $readyForFulfil = new readyForFulfilmentSpecification();

        $this->assertTrue($readyForFulfil->isSatisfiedBy($order));
    }

    /**
     * @dataProvider providerBlackListCustomerOrder
     */
    public function testAddCaseBlackCustomer($order)
    {
        $readyForFulfil = new readyForFulfilmentSpecification();

        $this->assertFalse($readyForFulfil->isSatisfiedBy($order));
    }
}
