<?php


namespace Qiwi\Core\Handlers;

/**
 * Interface CurlError
 * @package Qiwi\Core\Handlers
 */
interface CurlError
{
    /**
     * @return array|null
     */
    public function getCurlInfo() : ?array;
}