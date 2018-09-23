<?php

namespace Qiwi\Elements\PersonProfile;


use DateTime;
use Qiwi\Elements\Base;

/**
 * Class MobilePinInfo
 * @package Qiwi\Elements\PersonProfile
 */
class MobilePinInfo extends Base
{
    /**
     * Last change pin mobile application
     * @var DateTime
     */
    private $lastMobilePinChange;

    /**
     * Use pin in the mobile application
     * @var bool
     */
    private $mobilePinUsed;

    /**
     * Next change mobile pin
     * @var DateTime
     */
    private $nextMobilePinChange;

    /**
     * @param string $lastMobilePinChange
     * @return MobilePinInfo
     */
    public function setLastMobilePinChange(string $lastMobilePinChange) : self
    {
        $this->lastMobilePinChange = $this->makeDateTime($lastMobilePinChange);

        return $this;
    }

    /**
     * @return DateTime|null
     */
    public function getLastMobilePinChange() : ?DateTime
    {
        return $this->lastMobilePinChange;
    }

    /**
     * @param bool $mobilePinUsed
     * @return MobilePinInfo
     */
    public function setMobilePinUsed(bool $mobilePinUsed) : self
    {
        $this->mobilePinUsed = $mobilePinUsed;

        return $this;
    }

    /**
     * @return bool
     */
    public function getMobilePinUsed() : bool
    {
        return (bool)$this->mobilePinUsed;
    }

    /**
     * @param string $nextMobilePinChange
     * @return MobilePinInfo
     */
    public function setNextMobilePinChange(string $nextMobilePinChange) : self
    {
        $this->nextMobilePinChange = $this->makeDateTime($nextMobilePinChange);

        return $this;
    }

    /**
     * @return DateTime|null
     */
    public function getNextMobilePinChange() : ?DateTime
    {
        return $this->nextMobilePinChange;
    }
}