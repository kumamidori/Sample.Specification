<?php
namespace Sample\Specification\Order\Specification;

use PHPMentors\DomainKata\Entity\EntityInterface;
use Sample\Specification\Common\Specification\AbstractCompositeSpecification;

/**
 * 妥当注文内容仕様
 */
class ValidSpecification extends AbstractCompositeSpecification
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
