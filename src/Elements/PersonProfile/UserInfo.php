<?php

namespace Qiwi\Elements\PersonProfile;


use Qiwi\Elements\Base;

/**
 * Class UserInfo
 * @package Qiwi\Elements\PersonProfile
 */
class UserInfo extends Base
{
    /**
     * Default currency purse (ISO-4217)
     * @var int
     */
    private $defaultPayCurrency;

    /**
     * Service information
     * @var int
     */
    private $defaultPaySource;

    /**
     * User email
     * @var string
     */
    private $email;

    /**
     * First number transaction after registration
     * @var int
     */
    private $firstTxnId;

    /**
     * Service information
     * @var string
     */
    private $language;

    /**
     * Phone operator
     * @var string
     */
    private $operator;

    /**
     * Service information
     * @var string
     */
    private $phoneHash;

    /**
     * Service information
     * @var string
     */
    private $promoEnabled;

    /**
     * @param int $defaultPayCurrency
     * @return UserInfo
     */
    public function setDefaultPayCurrency(int $defaultPayCurrency) : self
    {
        $this->defaultPayCurrency = $defaultPayCurrency;

        return $this;
    }

    /**
     * @return int|null
     */
    public function getDefaultPayCurrency() : ?int
    {
        return $this->defaultPayCurrency;
    }

    /**
     * @param int $defaultPaySource
     * @return UserInfo
     */
    public function setDefaultPaySource(int $defaultPaySource) : self
    {
        $this->defaultPaySource = $defaultPaySource;

        return $this;
    }

    /**
     * @param string $email
     * @return UserInfo
     */
    public function setEmail(string $email) : self
    {
        $this->email = $email;

        return $this;
    }

    /**
     * @return null|string
     */
    public function getEmail() : ?string
    {
        return $this->email;
    }

    /**
     * @param int $firstTxnId
     * @return UserInfo
     */
    public function setFirstTxnId(int $firstTxnId) : self
    {
        $this->firstTxnId = $firstTxnId;

        return $this;
    }

    /**
     * @return int|null
     */
    public function getFirstTxnId() : ?int
    {
        return $this->firstTxnId;
    }

    /**
     * @param string $language
     * @return UserInfo
     */
    public function setLanguage(string $language) : self
    {
        $this->language = $language;

        return $this;
    }

    /**
     * @return null|string
     */
    public function getLanguage() : ?string
    {
        return $this->language;
    }

    /**
     * @param string $operator
     * @return UserInfo
     */
    public function setOperator(string $operator) : self
    {
        $this->operator = $operator;

        return $this;
    }

    /**
     * @return null|string
     */
    public function getOperator() : ?string
    {
        return $this->operator;
    }

    /**
     * @param string $phoneHash
     * @return UserInfo
     */
    public function setPhoneHash(string $phoneHash) : self
    {
        $this->phoneHash = $phoneHash;

        return $this;
    }

    /**
     * @return null|string
     */
    public function getPhoneHash() : ?string
    {
        return $this->phoneHash;
    }

    /**
     * @param string $promoEnabled
     * @return UserInfo
     */
    public function setPromoEnabled(string $promoEnabled) : self
    {
        $this->promoEnabled = $promoEnabled;

        return $this;
    }
}