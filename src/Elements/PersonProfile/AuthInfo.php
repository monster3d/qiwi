<?php

namespace Qiwi\Elements\PersonProfile;


use Qiwi\Elements\Base;

/**
 * Class AuthInfo
 * @package Qiwi\Elements\PersonProfile
 */
class AuthInfo extends Base
{
    /**
     * @var string
     */
    private $boundEmail;

    /**
     * @var string
     */
    private $ip;

    /**
     * @var string
     */
    private $lastLoginDate;

    /**
     * @var MobilePinInfo
     */
    private $mobilePinInfo;

    /**
     * @var PassInfo
     */
    private $passInfo;

    /**
     * @var string
     */
    private $personId;

    /**
     * @var PinInfo
     */
    private $pinInfo;

    /**
     * @var string
     */
    private $registrationDate;

    /**
     * @var ContractInfo
     */
    private $contractInfo;

    /**
     * @var IdentificationInfo
     */
    private $identificationInfo;

    /**
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
    public function setIp($ip) : self
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
    public function setLastLoginDate($lastLoginDate) : self
    {
        $this->lastLoginDate = $lastLoginDate;

        return $this;
    }

    /**
     * @return null|string
     */
    public function getStringLastLoginDate() : ?string
    {
        return $this->lastLoginDate;
    }

    /**
     * @return \DateTime
     */
    public function &getObjectLastLoginDate() : \DateTime
    {
        return \DateTime::createFromFormat('Y-m-d H:i:s', $this->lastLoginDate);
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
        $this->registrationDate = $registrationDate;

        return $this;
    }

    /**
     * @return null|string
     */
    public function getStringRegistrationDate() : ?string
    {
        return $this->registrationDate;
    }

    /**
     * @return \DateTime
     */
    public function getObjectRegistrationDate() : \DateTime
    {
        return \DateTime::createFromFormat('Y-m-d H-i-s', $this->registrationDate);
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