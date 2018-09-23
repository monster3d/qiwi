<?php

namespace Qiwi\Elements\PersonProfile;


use DateTime;
use Qiwi\Elements\Base;

/**
 * Class PassInfo
 * @package Qiwi\Elements\PersonProfile
 */
class PassInfo extends Base
{
    /**
     * Last change auth password
     * @var DateTime
     */
    private $lastPassChange;

    /**
     * Next change auth password
     * @var DateTime
     */
    private $nextPassChange;

    /**
     * Use password in the web site
     * @var bool
     */
    private $passwordUsed;

    /**
     * @param string $lastPassChange
     * @return PassInfo
     */
    public function setLastPassChange(string $lastPassChange) : self
    {
        $this->lastPassChange = $this->makeDateTime($lastPassChange);

        return $this;
    }

    /**
     * @return DateTime|null
     */
    public function getLastPassChange() : ?DateTime
    {
        return $this->lastPassChange;
    }

    /**
     * @param string $nextPassChange
     * @return PassInfo
     */
    public function setNextPassChange(string $nextPassChange) : self
    {
        $this->nextPassChange = $this->makeDateTime($nextPassChange);

        return $this;
    }

    /**
     * @return DateTime|null
     */
    public function getNextPassChange() : ?DateTime
    {
        return $this->nextPassChange;
    }

    /**
     * @param bool $passwordUsed
     * @return PassInfo
     */
    public function setPasswordUsed(bool $passwordUsed) : self
    {
        $this->passwordUsed = $passwordUsed;

        return $this;
    }

    /**
     * @return bool
     */
    public function getPasswordUsed() : bool
    {
        return (bool)$this->passwordUsed;
    }
}