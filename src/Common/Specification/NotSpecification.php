<?php
namespace Sample\Specification\Common\Specification;

use PHPMentors\DomainKata\Entity\EntityInterface;
use PHPMentors\DomainKata\Specification\SpecificationInterface;

final class NotSpecification extends AbstractCompositeSpecification implements SpecificationInterface
{
    private $specification;

    function __construct(SpecificationInterface $specification)
    {
        $this->specification = $specification;
    }

    public function isSatisfiedBy(EntityInterface $entity)
    {
        return !$this->specification->isSatisfiedBy($entity);
    }
}
