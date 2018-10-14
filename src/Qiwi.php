<?php

namespace Qiwi;

use Qiwi\Core\Driver;
use Qiwi\Core\DriverSettings;
use Qiwi\Elements\PersonProfile\PersonProfile;
use Qiwi\Requests\RequestBuilder;

/**
 * Class Qiwi
 * @package Qiwi
 */
final class Qiwi
{
    /**
     * API url
     * @var string
     */
    private $url = 'https://edge.qiwi.com';

    /**
     * Qiwi api token
     * @var string
     */
    private $token;

    /**
     * Qiwi constructor.
     * @param string $token
     */
    public function __construct(string $token)
    {
        $this->token = $token;
    }

    /**
     * @param bool $authInfoEnabled
     * @param bool $contractInfoEnabled
     * @param bool $userInfoEnabled
     * @return PersonProfile
     */
    public function getPersonProfile(bool $authInfoEnabled = true, bool $contractInfoEnabled = true, bool $userInfoEnabled = true) : PersonProfile
    {
        $requestBuilder       = new RequestBuilder(Settings::GLOBAL_VERSION_API);
        $personProfileRequest = $requestBuilder->buildPersonProfile($authInfoEnabled, $contractInfoEnabled, $userInfoEnabled);

        $driver = $this->buildDriver();
        $driver->setRequest($personProfileRequest);

        /** @todo need mapper builder response */
    }

    /**
     * @return DriverSettings
     */
    private function buildSettings() : DriverSettings
    {
        return new DriverSettings($this->token, $this->url);
    }

    /**
     * @return Driver
     */
    private function buildDriver() : Driver
    {
        return new Driver($this->buildSettings());
    }




}