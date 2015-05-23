<?php
namespace Sample\Specification\Common\Specification;

use PHPMentors\DomainKata\Entity\EntityInterface;
use PHPMentors\DomainKata\Specification\SpecificationInterface;

interface CompositeSpecificationInterface extends SpecificationInterface
{
    public function andSpec(SpecificationInterface $other);

    public function orSpec(SpecificationInterface $other);

    public function notSpec(EntityInterface $entity);
}
