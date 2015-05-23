<?php
namespace Sample\Specification\Order\Service;

use Sample\Specification\Order\Entity\Customer;

class BlackListService
{
    private $blackList = ['002'];

    /**
     * @param Customer $customer
     *
     * @return bool
     */
    public function contains(Customer $customer)
    {
        if(array_search($customer->cusId, $this->blackList) === false) {

            return false;
        }

        return true;
    }

    /**
     * @return array
     */
    public function getBlackList()
    {
        return $this->blackList;
    }
}
