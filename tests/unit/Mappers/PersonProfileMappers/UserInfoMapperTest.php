<?php

namespace Tests\unit\Mappers\PersonProfileMappers;

use PHPUnit\Framework\TestCase;
use Qiwi\Elements\PersonProfile\UserInfo;

class UserInfoMapperTest extends TestCase
{
    /**
     * @return UserInfo
     */
    private function makeUserInfo() : UserInfo
    {
        return new UserInfo();
    }


}