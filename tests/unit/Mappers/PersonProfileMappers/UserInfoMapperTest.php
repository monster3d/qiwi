<?php

namespace Tests\unit\Mappers\PersonProfileMappers;

use PHPUnit\Framework\TestCase;
use Qiwi\Elements\PersonProfile\UserInfo;
use Qiwi\Mappers\PersonProfileMappers\UserInfoMapper;
use Tests\Fixtures\Fixture;
use Tests\Fixtures\FixtureManager;

/**
 * Class UserInfoMapperTest
 * @package Tests\unit\Mappers\PersonProfileMappers
 */
class UserInfoMapperTest extends TestCase
{

    /**
     * @return Fixture
     */
    private function makeFixtureManager() : ?Fixture
    {
        return FixtureManager::make('PersonProfile', 'userInfo');
    }

    /**
     * @return UserInfo
     */
    private function makeUserInfo() : UserInfo
    {
        return new UserInfo();
    }

    /**
     * @return UserInfo
     */
    private function makeActualUserInfo() : UserInfo
    {
        $userInfo = new UserInfo();
        $userInfo
            ->setPhoneHash('lgsco87234f0287')
            ->setOperator('Beeline')
            ->setLanguage('string')
            ->setFirstTxnId('10807097143')
            ->setDefaultPaySource(7)
            ->setDefaultPayCurrency(643);

        return $userInfo;
    }

    /**
     * @group unit
     */
    public function testMake_UserInfo_returnVoid()
    {
        // Arrange
        $userInfo        = $this->makeUserInfo();
        $fixtureManager  = $this->makeFixtureManager();
        $userInfoFixture = $fixtureManager->getAsArray();
        $actualUserInfo  = $this->makeActualUserInfo();

        // Act
        UserInfoMapper::make($userInfo, $userInfoFixture['userInfo'])();

        // Assert
        $this->assertEquals($actualUserInfo, $userInfo);
    }
}