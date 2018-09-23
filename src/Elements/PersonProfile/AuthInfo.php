<?php

namespace Qiwi\Elements\PersonProfile;


use DateTime;
use Qiwi\Elements\Base;

/**
 * Class AuthInfo
 * @package Qiwi\Elements\PersonProfile
 */
class AuthInfo extends Base
{
    /**
     * Email tied to a purse
     * @var string
     */
    private $boundEmail;

    /**
     * Ip address
     * @var string
     */
    private $ip;

    /**
     * Last login datetime
     * @var DateTime
     */
    private $lastLoginDate;

    /**
     * @see MobilePinInfo
     * @var MobilePinInfo
     */
    private $mobilePinInfo;

    /**
     * @see PinInfo
     * @var PassInfo
     */
    private $passInfo;

    /**
     * Purse number
     * @var string
     */
    private $personId;

    /**
     * @var PinInfo
     */
    private $pinInfo;

    /**
     * Registration datetime
     * @var DateTime
     */
    private $registrationDate;

    /**
     * @see ContractInfo
     * @var ContractInfo
     */
    private $contractInfo;

    /**
     * @see IdentificationInfo
     * @var IdentificationInfo
     */
    private $identificationInfo;

    /**
     * @see UserInfo
     * @var UserInfo
     */
    private $userInfo;

    /**
     * @param string $boundEmail
     * @return AuthInfo
     */
    public function setBoundEmail(string $boundEmail) : self
    {
        $this->boundEmail = $boundEmail;

        return $this;
    }

    /**
     * @return null|string
     */
    public function getBoundEmail() : ?string
    {
        return $this->boundEmail;
    }

    /**
     * @param $ip
     * @return AuthInfo
     */
    public function setIp(string $ip) : self
    {
        $this->ip = $ip;

        return $this;
    }

    /**
     * @return string
     */
    public function getIp() : ?string
    {
        return $this->ip;
    }

    /**
     * @param $lastLoginDate
     * @return AuthInfo
     */
    public function setLastLoginDate(string $lastLoginDate) : self
    {
        $this->lastLoginDate = $this->makeDateTime($lastLoginDate);

        return $this;
    }

    /**
     * @return DateTime|null
     */
    public function getLastLoginDate() : ?DateTime
    {
        return $this->lastLoginDate;
    }

    /**
     * @param MobilePinInfo $mobilePinInfo
     * @return AuthInfo
     */
    public function setMobilePinInfo(MobilePinInfo &$mobilePinInfo) : self
    {
        $this->mobilePinInfo = $mobilePinInfo;

        return $this;
    }

    /**
     * @return null|MobilePinInfo
     */
    public function &getMobilePinInfo() : ?MobilePinInfo
    {
        return $this->mobilePinInfo;
    }

    /**
     * @param PassInfo $passInfo
     * @return AuthInfo
     */
    public function setPassInfo(PassInfo &$passInfo) : self
    {
        $this->passInfo = $passInfo;

        return $this;
    }

    /**
     * @return null|PassInfo
     */
    public function &getPassInfo() : ?PassInfo
    {
        return $this->passInfo;
    }

    /**
     * @param string $personId
     * @return AuthInfo
     */
    public function setPersonId(string $personId) : self
    {
        $this->personId = $personId;

        return $this;
    }

    /**
     * @return null|string
     */
    public function getPersonId() : ?string
    {
        return $this->personId;
    }

    /**
     * @param PinInfo $pinInfo
     * @return AuthInfo
     */
    public function &setPinInfo(PinInfo $pinInfo) : self
    {
        $this->passInfo = $pinInfo;

        return $this;
    }

    /**
     * @return null|PinInfo
     */
    public function getPinInfo() : ?PinInfo
    {
        return $this->pinInfo;
    }

    /**
     * @param string $registrationDate
     * @return AuthInfo
     */
    public function setRegistrationDate(string $registrationDate) : self
    {
        $this->registrationDate = $this->makeDateTime($registrationDate);

        return $this;
    }

    /**
     * @return DateTime|null
     */
    public function getRegistrationDate() : ?DateTime
    {
        return  $this->registrationDate;
    }

    /**
     * @param ContractInfo $contractInfo
     * @return AuthInfo
     */
    public function setContractInfo(ContractInfo &$contractInfo) : self
    {
        $this->contractInfo = $contractInfo;

        return $this;
    }

    /**
     * @return null|ContractInfo
     */
    public function &getContractInfo() : ?ContractInfo
    {
        return $this->contractInfo;
    }

    /**
     * @param IdentificationInfo $identificationInfo
     * @return AuthInfo
     */
    public function setIdentificationInfo(IdentificationInfo &$identificationInfo) : self
    {
        $this->identificationInfo = $identificationInfo;

        return $this;
    }

    /**
     * @return null|IdentificationInfo
     */
    public function &getIdentificationInfo() : ?IdentificationInfo
    {
        return $this->identificationInfo;
    }

    /**
     * @param UserInfo $userInfo
     * @return AuthInfo
     */
    public function setUserInfo(UserInfo &$userInfo) : self
    {
        $this->userInfo = $userInfo;

        return $this;
    }

    /**
     * @return null|UserInfo
     */
    public function &getUserInfo() : ?UserInfo
    {
        return $this->userInfo;
    }
}