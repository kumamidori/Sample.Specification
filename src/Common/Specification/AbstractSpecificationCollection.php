<?php
namespace Sample\Specification\Common\Specification;

use PHPMentors\DomainKata\Entity\EntityInterface;
use PHPMentors\DomainKata\Specification\SpecificationInterface;

abstract class AbstractSpecificationCollection implements SpecificationInterface, SpecificationCollectionInterface
{
    /**
     * @var \Sample\Specification\Common\Specification\SpecificationCollectionInterface[]
     */
    protected $specCollection;

    /**
     * @param EntityInterface $entity
     *
     * @return bool
     */
    public function isSatisfiedBy(EntityInterface $entity)
    {
        $result = true;
        foreach($this->specCollection as $spec) {
            /**
             * @var $spec SpecificationInterface
             */
            $result = $result && $spec->isSatisfiedBy($entity);
        }

        return $result;
    }

    /**
     * {@inheritDoc}
     */
    public function add(SpecificationInterface $specification)
    {
        $this->specCollection[] = $specification;
    }

    /**
     * {@inheritDoc}
     *
     * @return SpecificationInterface|null
     */
    public function get($key)
    {
        if (array_key_exists($key, $this->specCollection)) {
            return $this->specCollection[$key];
        } else {
            return null;
        }
    }

    /**
     * {@inheritDoc}
     */
    public function remove(SpecificationInterface $specification)
    {
        // TODO: Implement remove method
    }

    /**
     * {@inheritDoc}
     */
    public function count()
    {
        return count($this->specCollection);
    }

    /**
     * {@inheritDoc}
     */
    public function getIterator()
    {
        return new \ArrayIterator($this->specCollection);
    }
}
