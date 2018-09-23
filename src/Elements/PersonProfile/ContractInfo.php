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
     * @var DateTime
     */
    private $creationDate;

    /**
     * Service information
     * @var array
     */
    private $features = [];

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
        $this->creationDate = $this->makeDateTime($creationDate);

        return $this;
    }

    /**
     * @return DateTime
     */
    public function getCreationDate() : ?DateTime
    {
        return $this->creationDate;
    }

    /**
     * @param array $features
     * @return ContractInfo
     */
    public function setFeatures(array $features) : self
    {
        $this->features = $features;

        return $this;
    }

    /**
     * @return array
     */
    public function getFeatures() : array
    {
        return $this->features;
    }
}