<?php


namespace Qiwi\Core\Handlers;

/**
 * Interface CurlError
 * @package Qiwi\Core\Handlers
 */
interface CurlInfo
{
    /**
     * @return array|null
     */
    public function getCurlInfo() : ?array;
}