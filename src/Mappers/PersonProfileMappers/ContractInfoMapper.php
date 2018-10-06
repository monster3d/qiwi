<?php

namespace Qiwi\Mappers\PersonProfileMappers;

use Qiwi\Elements\PersonProfile\ContractInfo;
use Qiwi\Enums\BaseTypeEnum;
use Qiwi\Mappers\Mapper;

/**
 * Class ContractInfoMapper
 * @package Qiwi\Mappers\PersonProfileMappers
 */
final class ContractInfoMapper extends Mapper
{
    /**
     * @param ContractInfo $contractInfo
     * @param array $contractInfoResponse
     * @return callable
     */
    final public static function make(ContractInfo &$contractInfo, array $contractInfoResponse) : callable
    {
        $mapper = function () use(&$contractInfo, $contractInfoResponse) {
            if (self::isValid($contractInfoResponse, 'blocked')) {
                $contractInfo->setBlocked(self::getValue($contractInfoResponse, 'blocked', BaseTypeEnum::BOOL));
            }

            if (self::isValid($contractInfoResponse, 'contractId')) {
                $contractInfo->setContractId(self::getValue($contractInfoResponse, 'contractId', BaseTypeEnum::INT));
            }

            if (self::isValid($contractInfoResponse, 'creationDate')) {
                $contractInfo->setCreationDate(self::getValue($contractInfoResponse, 'creationDate', BaseTypeEnum::STRING));
            }

            if (self::isValid($contractInfoResponse, 'features')) {
                $contractInfo->setFeatures(self::getValue($contractInfoResponse, 'features', BaseTypeEnum::ARRAY));
            }
        };

        return $mapper;
    }

}