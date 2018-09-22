<?php

namespace Qiwi\Elements;


class Base
{
    /**
     * @param $name
     * @return mixed|null
     */
    public function __get($name)
    {
        $result = null;

        if (property_exists($this, $name)) {
            $result = $this->{$name};
        }

        return $result;
    }
}