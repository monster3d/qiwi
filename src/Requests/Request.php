<?php

namespace Qiwi\Requests;

/**
 * Class Request
 * @package Qiwi\Requests
 */
class Request
{
    /**
     * Request uri
     * @var string
     */
    private $uri;

    /**
     * Request method GET or POST or PUT and etc
     * @var string
     */
    private $method;

    /**
     * Url params
     * @var array
     */
    private $params = [];

    public function __construct(string $uri, string $method)
    {
        $this->uri    = $uri;
        $this->method = $method;
    }

    /**
     * @return array
     */
    public function getUrlParams() : array
    {
        return $this->params;
    }

    /**
     * @return string
     */
    public function getUri() : string
    {
        return $this->uri;
    }

    /**
     * Set url params
     * @param array $params
     */
    public function setUrlParams(array $params) : void
    {
        $this->params = $params;
    }

    /**
     * Get request method
     * @return string
     */
    public function getMethod() : string
    {
        return $this->method;
    }
}