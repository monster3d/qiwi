<?php

namespace Qiwi\Builders;

use Qiwi\Core\Handlers\JsonHandler;
use Qiwi\Elements\PersonProfile\AuthInfo;
use Qiwi\Elements\PersonProfile\ContractInfo;
use Qiwi\Elements\PersonProfile\IdentificationInfo;
use Qiwi\Elements\PersonProfile\MobilePinInfo;
use Qiwi\Elements\PersonProfile\PassInfo;
use Qiwi\Elements\PersonProfile\PersonProfile;
use Qiwi\Elements\PersonProfile\PinInfo;
use Qiwi\Elements\PersonProfile\UserInfo;
use Qiwi\Exceptions\JsonDecodeException;
use Qiwi\Mappers\PersonProfileMappers\ContractInfoMapper;
use Qiwi\Mappers\PersonProfileMappers\IdentificationInfoMapper;
use Qiwi\Mappers\PersonProfileMappers\PassInfoMapper;
use Qiwi\Mappers\PersonProfileMappers\UserInfoMapper;
use Qiwi\Responses\Response;

/**
 * Class PersonProfileResponseBuilder
 * @package Qiwi\Builders
 */
class PersonProfileResponseBuilder
{

    /**
     * @var PersonProfile
     */
    private $personProfile;

    /**
     * @var Response
     */
    private $response;

    /**
     * @var array
     */
    private $body;

    /**
     * @var JsonHandler
     */
    private $jsonHandler;

    /**
     * PersonProfileResponseBuilder constructor.
     * @param Response $response
     */
    public function __construct(Response $response)
    {
        $this->response      = $response;
        $this->jsonHandler   = new JsonHandler();
        $this->personProfile = new PersonProfile();
    }

    /**
     * @throws JsonDecodeException
     */
    public function prepare() : void
    {
        $rowBody    = $this->response->getData();
        $this->body = $this->jsonHandler->decode($rowBody);

        $error = $this->jsonHandler->getError();

        if ($error) {
            throw new JsonDecodeException($error);
        }
    }

    /**
     * Build person profile
     */
    public function build() : void
    {
        $mappers = $this->buildMappers();

        array_walk($mappers, function (&$mapper) {
            call_user_func($mapper);
        });
    }

    /**
     * @return PersonProfile
     */
    public function getPersonProfile() : PersonProfile
    {
        return $this->personProfile;
    }

    /**
     * @return array
     */
    protected function &buildMappers() : array
    {
        $mappers            = [];
        $personProfile      = &$this->personProfile;

        $userInfo           = new UserInfo();
        $mappers[]          = UserInfoMapper::make($userInfo, $this->body['userInfo']);

        $contractInfo       = new ContractInfo();
        $mappers[]          = ContractInfoMapper::make($contractInfo, $this->body['contractInfo']);

        $identificationInfo = new IdentificationInfo();
        $mappers[]          = IdentificationInfoMapper::make($identificationInfo, $this->body['contractInfo']['identificationInfo']);

        $passInfo           = new PassInfo();
        $mappers[]          = PassInfoMapper::make($passInfo, $this->body['authInfo']['passInfo']);

        /** @todo Need implements mapper */
        $authInfo           = new AuthInfo();
        $mappers[]          = AuthInfoMapper::make($authInfo, $this->body['authInfo']);

        $mobilePinInfo      = new MobilePinInfo();
        $mappers[]          = MobilePinInfoMapper::make($mobilePinInfo, $this->body['authInfo']['mobilePinInfo']);

        $pinInfo            = new PinInfo();
        $mappers[]          = PinInfoMapper::make($pinInfo, $this->body['authInfo']['pinInfo']);

        $authInfo
            ->setPassInfo($passInfo)
            ->setMobilePinInfo($mobilePinInfo);

        $contractInfo
            ->setIdentificationInfo($identificationInfo);

        $personProfile
            ->setAuthInfo($authInfo)
            ->setContractInfo($contractInfo)
            ->setUserInfo($userInfo);

        return $mappers;
    }
}