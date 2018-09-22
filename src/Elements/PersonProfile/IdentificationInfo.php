<?php

namespace Qiwi\Elements\PersonProfile;


use Qiwi\Elements\Base;
use Qiwi\Enums\IdentificationLevelEnum;

/**
 * Class IdentificationInfo
 * @package Qiwi\Elements\PersonProfile
 */
class IdentificationInfo extends Base
{
    /**
     * Service alias
     * @var string
     */
    private $bankAlias;

    /**
     * Current identification level
     * @var string
     * @see IdentificationLevelEnum
     */
    private $identificationLevel;

    /**
     * @param string $bankAlias
     * @return IdentificationInfo
     */
    public function setBankAlias(string $bankAlias) : self
    {
        $this->bankAlias = $bankAlias;

        return $this;
    }

    /**
     * @return null|string
     */
    public function getBankAlias() : ?string
    {
        return $this->bankAlias;
    }

    /**
     * @param string $identificationLevel
     * @return IdentificationInfo
     */
    public function setIdentificationLevel(string $identificationLevel) : self
    {
        $this->identificationLevel = $identificationLevel;

        return $this;
    }

    /**
     * @return null|string
     */
    public function getIdentificationLevel() : ?string
    {
        return $this->identificationLevel;
    }
}