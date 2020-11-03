<?php


namespace Ontasy\Postapi\Model;


use Magento\Framework\DataObject;
use Ontasy\Postapi\Api\Data\DataRepositoryInterfaceFactory;
use Ontasy\Postapi\Api\Data\DataRepositoryInterface;

class ApiRepository extends DataObject implements \Ontasy\Postapi\Api\ApiRepositoryInterface
{
    const GREET_MESSAGE = "Welcome";
    /**
     * @var DataRepositoryInterfaceFactory
     */
    private $dataRepositoryFactory;

    /**
     * ApiRepository constructor.
     * @param array $data
     * @param DataRepositoryInterfaceFactory $dataRepositoryFactory
     */
    public function __construct(
        DataRepositoryInterfaceFactory $dataRepositoryFactory,
        array $data = []
    )
    {
        $this->dataRepositoryFactory = $dataRepositoryFactory;
        parent::__construct($data);
    }

    /**
     * @inheritDoc
     */
    public function getDataWithMessage($name)
    {
        /** @var DataRepositoryInterface $response */
        $response = $this->dataRepositoryFactory->create();
        $response->setName($name);
        $response->setMessage(self::GREET_MESSAGE);
        return $response;
    }
}
