<?php

namespace Qiwi\Responses;

/**
 * Class Response
 * @package Qiwi\Responses
 */
class Response
{

    /**
     * Body data
     * @var string
     */
    private $data;

    /**
     * @param $data
     * @return Response
     */
    public function setData($data) : self
    {
        $this->data = $data;

        return $this;
    }

    /**
     * @return null|string
     */
    public function getData() : ?string
    {
        return $this->data;
    }
}