<?php


namespace Ontasy\Postapi\Api\Data;


interface DataRepositoryInterface
{
    /**
     * @return string
     */
    public function getName();

    /**
     * @param string $name
     * @return string
     */
    public function setName($name);

    /**
     * @return string
     */
    public function getMessage();

    /**
     * @param string $message
     * @return string
     */
    public function setMessage($message);
}
