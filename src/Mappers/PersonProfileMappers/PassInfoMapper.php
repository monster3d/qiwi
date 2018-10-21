<?php

namespace Qiwi\Mappers\PersonProfileMappers;


use Qiwi\Elements\PersonProfile\PassInfo;
use Qiwi\Enums\BaseTypeEnum;
use Qiwi\Mappers\Mapper;

/**
 * Class PassInfoMapper
 * @package Qiwi\Mappers\PersonProfileMappers
 * @todo Create unit test
 */
final class PassInfoMapper extends Mapper
{
    /**
     * @param PassInfo $passInfo
     * @param array $passInfoResponse
     * @return callable
     */
    final public static function make(PassInfo &$passInfo, array $passInfoResponse) : callable
    {
        $mapper = function () use(&$passInfo, $passInfoResponse) {

            if (self::isValid($passInfoResponse, 'lastPassChange')) {
                $passInfo->setLastPassChange(self::getValue($passInfoResponse, 'lastPassChange', BaseTypeEnum::STRING));
            }

            if (self::isValid($passInfoResponse, 'nextPassChange')) {
                $passInfo->setNextPassChange(self::getValue($passInfoResponse, 'nextPassChange', BaseTypeEnum::STRING));
            }

            if (self::isValid($passInfoResponse, 'passwordUsed')) {
                $passInfo->setPasswordUsed(self::getValue($passInfoResponse, 'email', BaseTypeEnum::BOOL));
            }
        };

        return $mapper;
    }
}