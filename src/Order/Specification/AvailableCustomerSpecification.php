<?php
namespace Sample\Specification\Order\Specification;

use PHPMentors\DomainKata\Entity\EntityInterface;
use Sample\Specification\Common\Specification\AbstractCompositeSpecification;
use Sample\Specification\Order\Service\BlackListService;

/**
 * 決済可能顧客仕様
 */
class AvailableCustomerSpecification extends AbstractCompositeSpecification
{
    /**
     * @var BlackListService
     */
    private $blackList;

    public function __construct()
    {
        $this->blackList = new BlackListService();
    }

    /**
     * @param EntityInterface $entity
     *
     * @return bool
     */
    public function isSatisfiedBy(EntityInterface $entity)
    {
        /**
         * @var $entity \Sample\Specification\Order\Entity\Order
         */
        return !$this->blackList->contains($entity->customer);
    }
}
