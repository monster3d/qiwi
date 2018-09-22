<?php

namespace Qiwi\Elements\PersonProfile;


use DateTime;
use Qiwi\Elements\Base;

/**
 * Class ContractInfo
 * @package Qiwi\Elements\PersonProfile
 */
class ContractInfo extends Base
{
    /**
     * Blocked purse
     * @var bool
     */
    private $blocked;

    /**
     * Purse number
     * @var int
     */
    private $contractId;

    /**
     * Create datetime
     * @var string
     */
    private $creationDate;

    /**
     * @param bool $blocked
     * @return ContractInfo
     */
    public function setBlocked(bool $blocked) : self
    {
        $this->blocked = $blocked;

        return $this;
    }

    /**
     * @return bool
     */
    public function getBlocked() : bool
    {
        return (bool)$this->blocked;
    }

    /**
     * @param int $contractId
     * @return ContractInfo
     */
    public function setContractId(int $contractId) : self
    {
        $this->contractId = $contractId;

        return $this;
    }

    /**
     * @return int|null
     */
    public function getContractId() : ?int
    {
        return $this->contractId;
    }

    /**
     * @param string $creationDate
     * @return ContractInfo
     */
    public function setCreationDate(string $creationDate) : self
    {
        $this->creationDate = $creationDate;

        return $this;
    }

    /**
     * @return null|string`
     */
    public function getStringCreationDate() : ?string
    {
        return $this->creationDate;
    }

    /**
     * @return DateTime
     */
    public function getObjectCreationDate() : DateTime
    {
        return DateTime::createFromFormat('Y-m-d H:i:s', $this->creationDate);
    }
}