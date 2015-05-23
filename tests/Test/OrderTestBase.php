<?php
namespace Sample\Specification\Test;

use Sample\Specification\Order\Entity\Customer;
use Sample\Specification\Order\Entity\ItemA;
use Sample\Specification\Order\Entity\LineItem;
use Sample\Specification\Order\Entity\LineItemCollection;
use Sample\Specification\Order\Entity\Order;
use Sample\Specification\Order\Service\BlackListService;

abstract class OrderTestBase extends \PHPUnit_Framework_TestCase
{
    public function providerValidOrder()
    {
        $item = new ItemA('A001', 'キーホルダ', 1);
        $customer = new Customer('001', 'nana', 7);
        $lineItem = new LineItem($item, 1);
        $lineItems = new LineItemCollection([$lineItem]);
        $order = new Order('0100', new \DateTime(), $customer, $lineItems);

        return [
            [$order],
        ];
    }

    public function providerBlackListCustomerOrder()
    {
        $item = new ItemA('A001', 'キーホルダ', 1);
        $blacks = (new BlackListService())->getBlackList();
        $customer = new Customer($blacks[0], 'nana', 7);
        $lineItem = new LineItem($item, 1);
        $lineItems = new LineItemCollection([$lineItem]);
        $order = new Order('0100', new \DateTime(), $customer, $lineItems);

        return [
            [$order],
        ];
    }
}
