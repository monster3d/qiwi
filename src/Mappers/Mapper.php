<?php

namespace Qiwi\Mappers;

use Qiwi\Enums\BaseTypeEnum;

/**
 * Class Mapper
 * @package Qiwi\Mappers
 */
class Mapper
{
    /**
     * @param array $value
     * @param string $name
     * @return bool
     */
    protected static function isValid(array $value, string $name) : bool
    {
        $result = false;

        if (isset($value[$name]) && !is_null($value[$name])) {
            $result = true;
        }

        return $result;
    }

    /**
     * @param array $data
     * @param string $name
     * @param string $type
     * @return mixed
     */
    protected static function getValue(array $data, string $name, string $type)
    {
        $result = null;
        $value  = $data[$name];

        switch ($type) {
            case BaseTypeEnum::INT:
                $result = (int)$value;
                break;
            case BaseTypeEnum::STRING:
                $result = (string)$value;
                break;
            case BaseTypeEnum::BOOL:
                $result = (bool)$value;
                break;
            case BaseTypeEnum::ARRAY:
                $result = (array)$value;
                break;
        }

        return $result;
    }
}