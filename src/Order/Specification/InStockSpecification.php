<?php

namespace Sample\Specification\Order\Specification;

use PHPMentors\DomainKata\Entity\EntityInterface;
use Sample\Specification\Common\Specification\AbstractCompositeSpecification;

/**
 * 商品在庫有り仕様
 */
class InStockSpecification extends AbstractCompositeSpecification
{
    /**
     * @param EntityInterface $entity
     *
     * @return bool
     */
    public function isSatisfiedBy(EntityInterface $entity)
    {
        // TODO: Implement
        //if (// 在庫が無い場合) {
        //    return false;
        //}
        return true;
    }
}
