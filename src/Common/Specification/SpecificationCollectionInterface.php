<?php

namespace Sample\Specification\Common\Specification;

use PHPMentors\DomainKata\Specification\SpecificationInterface;

interface SpecificationCollectionInterface extends \Countable, \IteratorAggregate
{
    /**
     * @param SpecificationInterface $specification
     */
    public function add(SpecificationInterface $specification);

    /**
     * @param string|int
     *
     * @return SpecificationInterface
     */
    public function get($key);

    /**
     * @param SpecificationInterface $specification
     */
    public function remove(SpecificationInterface $specification);
}
