<?php


namespace Ontasy\Postapi\Api;


interface ApiRepositoryInterface
{
    /**
     * @param string $name
     * @return \Ontasy\Postapi\Api\Data\DataRepositoryInterface
     */
    public function getDataWithMessage($name);
}
