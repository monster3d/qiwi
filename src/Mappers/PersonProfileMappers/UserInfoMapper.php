<?php

namespace Qiwi\Mappers\PersonProfileMappers;

use Qiwi\Elements\PersonProfile\UserInfo;
use Qiwi\Enums\BaseTypeEnum;
use Qiwi\Mappers\Mapper;

/**
 * Class UserInfoMapper
 * @package Qiwi\Mappers\PersonProfileMappers
 */
final class UserInfoMapper extends Mapper
{
    /**
     * @param UserInfo $userInfo
     * @param array $userInfoResponse
     * @return callable
     */
    final public static function make(UserInfo &$userInfo, array $userInfoResponse) : callable
    {
        $mapper = function () use(&$userInfo, $userInfoResponse) {
            if (self::isValid($userInfoResponse, 'defaultPayCurrency')) {
                $userInfo->setDefaultPayCurrency(self::getValue($userInfoResponse, 'defaultPayCurrency', BaseTypeEnum::INT));
            }

            if (self::isValid($userInfoResponse, 'defaultPaySource')) {
                $userInfo->setDefaultPaySource(self::getValue($userInfoResponse, 'defaultPaySource', BaseTypeEnum::INT));
            }

            if (self::isValid($userInfoResponse, 'email')) {
                $userInfo->setEmail(self::getValue($userInfoResponse, 'email', BaseTypeEnum::STRING));
            }

            if (self::isValid($userInfoResponse, 'firstTxnId')) {
                $userInfo->setFirstTxnId(self::getValue($userInfoResponse, 'firstTxnId', BaseTypeEnum::INT));
            }

            if (self::isValid($userInfoResponse, 'language')) {
                $userInfo->setLanguage(self::getValue($userInfoResponse, 'language', BaseTypeEnum::STRING));
            }

            if (self::isValid($userInfoResponse, 'operator')) {
                $userInfo->setOperator(self::getValue($userInfoResponse, 'operator', BaseTypeEnum::STRING));
            }

            if (self::isValid($userInfoResponse, 'phoneHash')) {
                $userInfo->setPhoneHash(self::getValue($userInfoResponse, 'phoneHash', BaseTypeEnum::STRING));
            }

            if (self::isValid($userInfoResponse, 'promoEnabled')) {
                $userInfo->setPromoEnabled(self::getValue($userInfoResponse, 'promoEnabled', BaseTypeEnum::STRING));
            }
        };

        return $mapper;
    }

}