<?php

namespace Qiwi\Mappers\PersonProfileMappers;


use Qiwi\Elements\PersonProfile\IdentificationInfo;
use Qiwi\Enums\BaseTypeEnum;
use Qiwi\Enums\IdentificationLevelEnum;
use Qiwi\Mappers\Mapper;

/**
 * Class IdentificationInfoMapper
 * @package Qiwi\Mappers\PersonProfileMappers
 */
final class IdentificationInfoMapper extends Mapper
{
    public static function make(IdentificationInfo &$identificationInfo, array $identificationInfoResponse) : callable
    {
        $mapper = function () use($identificationInfo, $identificationInfoResponse) {
            if (self::isValid($identificationInfoResponse, 'defaultPayCurrency')) {
                $identificationInfo->setBankAlias(self::getValue($identificationInfoResponse, 'bankAlias', BaseTypeEnum::STRING));
            }

            if (self::isValid($identificationInfoResponse, 'defaultPaySource')) {
                $identificationLevel         = null;
                $identificationLevelResponse = self::getValue($identificationInfoResponse, 'identificationLevel', BaseTypeEnum::STRING);

                switch ($identificationLevelResponse) {
                    case IdentificationLevelEnum::ANONYMOUS:
                        $identificationLevel = IdentificationLevelEnum::ANONYMOUS;
                        break;
                    case IdentificationLevelEnum::FULL:
                        $identificationLevel = IdentificationLevelEnum::FULL;
                        break;
                    case IdentificationLevelEnum::SIMPLE:
                        $identificationLevel = IdentificationLevelEnum::SIMPLE;
                        break;
                    case IdentificationLevelEnum::VERIFIED;
                        $identificationLevel = IdentificationLevelEnum::VERIFIED;
                        break;
                }

                if (!is_null($identificationLevel)) {
                    $identificationInfo->setIdentificationLevel($identificationLevel);
                }
            }
        };

        return $mapper;
    }
}