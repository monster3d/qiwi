<?php

namespace Qiwi\Requests;


use Qiwi\Enums\RequestMethodEnum;

final class RequestBuilder
{
    /**
     * Remote api version
     * @var string
     */
    private $version;

    public function __construct($version)
    {
        $this->version = $version;
    }

    /**
     * Build PersonProfile request
     *
     * @param bool $authInfoEnabled Enable settings auth info
     * @param bool $contractInfoEnabled Enable settings auth contract
     * @param bool $userInfoEnabled Enable settings user information
     * @return PersonProfileRequest
     */
    public function buildPersonProfile(bool $authInfoEnabled, bool $contractInfoEnabled, bool $userInfoEnabled) : PersonProfileRequest
    {
        $uri    = sprintf('/person-profile/%s/profile/current',
            $this->version);

        $params = [
            'authInfoEnabled'     => $authInfoEnabled,
            'contractInfoEnabled' => $contractInfoEnabled,
            'userInfoEnabled'     => $userInfoEnabled
        ];

        $personProfileRequest = new PersonProfileRequest($uri, RequestMethodEnum::GET);
        $personProfileRequest->setUrlParams($params);

        return $personProfileRequest;
    }
}