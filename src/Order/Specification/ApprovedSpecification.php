<?php
namespace Sample\Specification\Order\Specification;

use PHPMentors\DomainKata\Entity\EntityInterface;
use Sample\Specification\Common\Specification\AbstractCompositeSpecification;

/**
 * 権限承認済み仕様
 */
class ApprovedSpecification extends AbstractCompositeSpecification
{
    /**
     * @param EntityInterface $entity
     *
     * @return bool
     */
    public function isSatisfiedBy(EntityInterface $entity)
    {
        return true;
    }
}
