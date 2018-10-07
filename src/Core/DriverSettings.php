<?php

namespace Qiwi\Core;


/**
 * Class DriverSettings
 * @package Qiwi\Core
 */
class DriverSettings
{
    /**
     * Qiwi api token
     * @var string
     */
    private $token;

    /**
     * Base API url
     * @var string
     */
    private $url;

    /**
     * DriverSettings constructor.
     * @param string $token
     * @param string $url
     */
    public function __construct(string $token, string $url)
    {
        $this->token = $token;
        $this->url   = $url;
    }

    /**
     * @return string
     */
    public function getToken() : string
    {
        return $this->token;
    }

    /**
     * @return string
     */
    public function getUrl() : string
    {
        return $this->url;
    }
}