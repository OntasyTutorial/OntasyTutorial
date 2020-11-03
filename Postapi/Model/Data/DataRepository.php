<?php


namespace Ontasy\Postapi\Model\Data;


class DataRepository extends \Magento\Framework\DataObject implements \Ontasy\Postapi\Api\Data\DataRepositoryInterface
{

    /**
     * @inheritDoc
     */
    public function getName()
    {
        return $this->getData('name');
    }

    /**
     * @inheritDoc
     */
    public function setName($name)
    {
        return $this->setData('name', $name);
    }

    /**
     * @inheritDoc
     */
    public function getMessage()
    {
        return $this->getData('message');
    }

    /**
     * @inheritDoc
     */
    public function setMessage($message)
    {
        return $this->setData('message', $message);
    }
}
