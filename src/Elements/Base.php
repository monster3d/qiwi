<?php

namespace Qiwi\Elements;


use DateTime;

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

    /**
     * @param string $stringDatetime
     * @return DateTime
     */
    protected function makeDateTime(string $stringDatetime) : DateTime
    {
        return new DateTime($stringDatetime);
    }
}