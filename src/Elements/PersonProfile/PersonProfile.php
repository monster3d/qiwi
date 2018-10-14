<?php

namespace Qiwi\Elements\PersonProfile;

use Qiwi\Elements\Base;

/**
 * Class PersonProfile
 * @package Qiwi\Elements\PersonProfile
 */
class PersonProfile extends Base
{
    /**
     * @var AuthInfo
     */
    private $authInfo;

    /**
     * @var ContractInfo
     */
    private $contractInfo;

    /**
     * @var
     */
    private $userInfo;

    /**
     * @param AuthInfo $authInfo
     * @return PersonProfile
     */
    public function setAuthInfo(AuthInfo $authInfo) : self
    {
        $this->authInfo = $authInfo;

        return $this;
    }

    /**
     * @param ContractInfo $contractInfo
     * @return PersonProfile
     */
    public function setContractInfo(ContractInfo $contractInfo) : self
    {
        $this->contractInfo;

        return $this;
    }

    /**
     * @param UserInfo $userInfo
     * @return PersonProfile
     */
    public function setUserInfo(UserInfo $userInfo) : self
    {
        $this->userInfo = $userInfo;

        return $this;
    }

    /**
     * @return null|AuthInfo
     */
    public function getAuthInfo() : ?AuthInfo
    {
        return $this->authInfo;
    }

    /**
     * @return null|ContractInfo
     */
    public function getContractInfo() : ?ContractInfo
    {
        return $this->contractInfo;
    }

    /**
     * @return null|UserInfo
     */
    public function getUserInfo() : ?UserInfo
    {
        return $this->userInfo;
    }
}