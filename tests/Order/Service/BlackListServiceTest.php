<?php
namespace Sample\Specification\Order\Service;

use Sample\Specification\Order\Entity\Customer;

class BlackListServiceTest extends \PHPUnit_Framework_TestCase
{
    public function testContainsCaseWhiteCustomer()
    {
        $blackList = new BlackListService();
        $customer = new Customer('000', 'nana', 1);

        $this->assertFalse($blackList->contains($customer));
    }

    public function testContainsCaseBlackCustomer()
    {
        $blackList = new BlackListService();
        $blacks = $blackList->getBlackList();
        $customer = new Customer($blacks[0], 'nana', 1);

        $this->assertTrue($blackList->contains($customer));
    }
}
