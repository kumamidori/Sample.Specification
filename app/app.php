<?php

require dirname(__DIR__) . '/vendor/autoload.php';

use Sample\Specification\Order\Specification\ReadyForFulfilmentSpecification;
use Sample\Specification\Order\Specification\ApprovedSpecification;
use Sample\Specification\Order\Specification\AvailableCustomerSpecification;
use Sample\Specification\Order\Entity\ItemA;
use Sample\Specification\Order\Entity\Customer;
use Sample\Specification\Order\Entity\LineItem;
use Sample\Specification\Order\Entity\LineItemCollection;
use Sample\Specification\Order\Entity\Order;
use Sample\Specification\Order\Specification\ValidSpecification;
use Sample\Specification\Order\Specification\InStockSpecification;

$item = new ItemA('A001', 'キーホルダ', 1);
$customer = new Customer('001', 'nana', 7);
$lineItem = new LineItem($item, 1);
$lineItems = new LineItemCollection([$lineItem]);
$order = new Order('0100', new DateTime(), $customer, $lineItems);
$result = (new readyForFulfilmentSpecification())->isSatisfiedBy($order);

echo __FILE__ . ' ' . var_export($result, true) . PHP_EOL;
echo '*******' . PHP_EOL;

$result = (new ValidSpecification())
    ->andSpec(new ApprovedSpecification())
    ->andSpec(new AvailableCustomerSpecification())
    ->andSpec(new InStockSpecification())
    ->isSatisfiedBy($order);
echo __FILE__ . ' ' . var_export($result, true) . PHP_EOL;
echo '*******' . PHP_EOL;
