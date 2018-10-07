<?php

namespace Qiwi\Core;

use Qiwi\Exceptions\InitException;
use Qiwi\Requests\InterfaceMethods\Post;
use Qiwi\Requests\Request;

/**
 * Class Driver
 * @package Qiwi\Core
 */
class Driver
{

    /**
     * @var resource
     */
    private $curl;

    /**
     * @var DriverSettings
     */
    private $settings;

    /**
     * @var array
     */
    private $curlOptions;

    /**
     * @var Request
     */
    private $currentRequest;

    /**
     * Driver constructor.
     * @param DriverSettings $driverSettings
     */
    public function __construct(DriverSettings $driverSettings)
    {
        $this->settings    = $driverSettings;
        $this->curlOptions = [];
    }

    /**
     * Base init Driver
     */
    protected function init() : void
    {
        $this->curl = curl_init();
    }

    /**
     * @param Request $request
     * @return Driver
     */
    public function setRequest(Request $request) : self
    {
        $this->currentRequest = $request;

        return $this;
    }

    /**
     * @return Driver
     * @throws InitException
     */
    public function driverInit() : self
    {
        if (!$this->currentRequest) {
            throw new InitException('Before set Request. Call method Driver::setRequest');
        }

        $url         = $this->buildUrl();
        $headers     = $this->buildHeaders();
        $requestType = $this->currentRequest->getMethod();


        $this->curlOptions[CURLOPT_URL]            = $url;
        $this->curlOptions[CURLOPT_HTTPHEADER]     = $headers;
        $this->curlOptions[CURLOPT_CUSTOMREQUEST]  = $requestType;
        $this->curlOptions[CURLOPT_RETURNTRANSFER] = true;

        if ($this->currentRequest instanceof Post) {
            $postFields = $this->currentRequest->getBody();
            $this->curlOptions[CURLOPT_POSTFIELDS] = $postFields;
        }

        return $this;
    }

    /**
     * @return string
     */
    protected function buildUrl() : string
    {
        $url       = $this->settings->getUrl();
        $uri       = $this->currentRequest->getUri();
        $params    = $this->currentRequest->getUrlParams();
        $urlParams = [];

        foreach ($params as $key => $value) {
            $urlParams[] = sprintf('%s=%s',
                $key, $value);
        }

        $fullUrl = sprintf('%s%s?%s',
            $url, $uri, implode('&', $urlParams));

        return $fullUrl;
    }

    /**
     * @return array
     */
    protected function buildHeaders() : array
    {
        $headers    = [];

        $token      = $this->settings->getToken();
        $authHeader = sprintf('%s:%s %s',
            'Authorization', 'Bearer', $token);
        $headers[] = $authHeader;

        $applicationType = 'application/json';
        $acceptHeader    = sprintf('%s:%s',
            'Accept', $applicationType);
        $headers[] = $acceptHeader;

        $contentHeader = sprintf('%s:%s',
            'Content-type', $applicationType);
        $headers[] = $contentHeader;

        return $headers;
    }
}