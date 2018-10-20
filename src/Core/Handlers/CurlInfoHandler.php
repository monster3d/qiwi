<?php

namespace Qiwi\Core\Handlers;

/**
 * Class CurlErrorHandler
 * @package Qiwi\Core\Handlers
 */
class CurlInfoHandler
{
    /**
     * @var CurlInfo
     */
    private $curlInfo;

    /**
     * CurlErrorHandler constructor.
     * @param CurlInfo $curlInfo
     */
    public function __construct(CurlInfo $curlInfo)
    {
        $this->curlInfo = $curlInfo->getCurlInfo();
    }

    /**
     * @return string
     */
    public function getStatusCode() : string
    {
        return $this->curlInfo['http_code'];
    }

    /**
     * @return int
     */
    public function getRequestTime() : int
    {
        return $this->curlInfo['total_time'];
    }
}