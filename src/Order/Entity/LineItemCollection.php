<?php
namespace Sample\Specification\Order\Entity;

use PHPMentors\DomainKata\Entity\EntityCollectionInterface;
use PHPMentors\DomainKata\Entity\EntityInterface;

class LineItemCollection implements EntityCollectionInterface
{
    /**
     * @var LineItem[]
     */
    private $lineItems = array();

    /**
     * @param LineItem[] $lineItems
     */
    public function __construct(array $lineItems = array())
    {
        $this->lineItems = $lineItems;
    }

    /**
     * {@inheritDoc}
     */
    public function add(EntityInterface $entity)
    {
        $this->lineItems[] = $entity;
    }
    /**
     * {@inheritDoc}
     *
     * @return EntityInterface|null
     */
    public function get($key)
    {
        if (array_key_exists($key, $this->lineItems)) {
            return $this->lineItems[$key];
        } else {
            return null;
        }
    }
    /**
     * {@inheritDoc}
     */
    public function remove(EntityInterface $entity)
    {
    }

    /**
     * {@inheritDoc}
     */
    public function count()
    {
        return count($this->lineItems);
    }
    /**
     * {@inheritDoc}
     */
    public function getIterator()
    {
        return new \ArrayIterator($this->lineItems);
    }

    /**
     * @return array
     *
     * @since Method available since Release 1.4.0
     */
    public function toArray()
    {
        return $this->lineItems;
    }
}
