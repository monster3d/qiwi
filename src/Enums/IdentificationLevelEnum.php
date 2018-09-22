<?php

namespace Qiwi\Enums;

/**
 * Class IdentificationLevelEnum
 * @package Qiwi\Enums
 */
abstract class IdentificationLevelEnum
{
    /**
     * Without identification
     */
    const ANONYMOUS = 'ANONYMOUS';

    /**
     * Simple identification
     */
    const SIMPLE = 'SIMPLE';

    /**
     * Simple identification
     */
    const VERIFIED = 'VERIFIED';

    /**
     * Simple identification
     */
    const FULL = 'FULL';
}