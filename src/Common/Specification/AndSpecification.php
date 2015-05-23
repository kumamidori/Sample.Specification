<?php
namespace Sample\Specification\Common\Specification;

use PHPMentors\DomainKata\Entity\EntityInterface;
use PHPMentors\DomainKata\Specification\SpecificationInterface;

final class AndSpecification extends AbstractCompositeSpecification implements SpecificationInterface
{
    private $spec1;
    private $spec2;

    function __construct(SpecificationInterface $spec1, SpecificationInterface $spec2)
    {
        $this->spec1 = $spec1;
        $this->spec2 = $spec2;
    }

    public function isSatisfiedBy(EntityInterface $entity)
    {
        return $this->spec1->isSatisfiedBy($entity) && $this->spec2->isSatisfiedBy($entity);
    }
}
