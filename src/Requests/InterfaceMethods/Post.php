<?php

namespace Qiwi\Requests\InterfaceMethods;

/**
 * Interface Post
 * @package Qiwi\Requests\InterfaceMethods
 */
interface Post
{
    /**
     * Body data for post params request
     * @return array
     */
    public function getBody() : array;

    /**
     * Set params
     * @param $mixed
     */
    public function setBody($mixed) : void;
}