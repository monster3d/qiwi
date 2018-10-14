<?php

namespace Qiwi\Responses;


class Response
{
    /**
     * HTTP status code
     * @var int
     */
    private $statusCode;

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

    /**
     * @param int $code
     * @return Response
     */
    public function setHttpStatusCode(int $code) : self
    {
        $this->statusCode = $code;

        return $this;
    }

    /**
     * @return int
     */
    public function getHttpStatusCode() : int
    {
        return $this->statusCode;
    }

}