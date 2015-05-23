<?php
namespace Sample\Specification\Common\Specification;

use PHPMentors\DomainKata\Entity\EntityInterface;
use PHPMentors\DomainKata\Specification\SpecificationInterface;

abstract class AbstractCompositeSpecification implements CompositeSpecificationInterface
{
    public function andSpec(SpecificationInterface $other)
    {
        return new AndSpecification($this, $other);
    }

    public function orSpec(SpecificationInterface $other)
    {
        return new OrSpecification($this, $other);
    }

    public function notSpec(EntityInterface $entity)
    {
        return !$this->isSatisfiedBy($entity);
    }
}
