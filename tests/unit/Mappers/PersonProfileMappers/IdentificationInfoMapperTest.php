<?php

namespace Tests\unit\Mappers\PersonProfileMappers;


use PHPUnit\Framework\TestCase;
use Qiwi\Elements\PersonProfile\IdentificationInfo;
use Qiwi\Enums\IdentificationLevelEnum;
use Qiwi\Mappers\PersonProfileMappers\IdentificationInfoMapper;
use Tests\Fixtures\Fixture;
use Tests\Fixtures\FixtureManager;

/**
 * Class IdentificationInfoMapperTest
 * @package Tests\unit\Mappers\PersonProfileMappers
 */
class IdentificationInfoMapperTest extends TestCase
{

    /**
     * @return Fixture
     */
    private function makeFixtureManager() : ?Fixture
    {
        return FixtureManager::make('PersonProfile', 'identificationInfo');
    }

    /**
     * @return IdentificationInfo
     */
    private function makeIdentificationInfo() : IdentificationInfo
    {
        return new IdentificationInfo();
    }

    /**
     * @return IdentificationInfo
     */
    private function makeActualIdentificationInfo() : IdentificationInfo
    {
        $identificationInfo = new IdentificationInfo();
        $identificationInfo
            ->setIdentificationLevel(IdentificationLevelEnum::SIMPLE)
            ->setBankAlias('QIWI');

        return $identificationInfo;
    }

    /**
     * @group unit
     */
    public function testMake_IdentificationInfo_returnVoid()
    {
        // Arrange
        $fixtureManager            = $this->makeFixtureManager();
        $identificationInfo        = $this->makeIdentificationInfo();
        $identificationInfoFixture = $fixtureManager->getAsArray();
        $actualIdentificationInfo  = $this->makeActualIdentificationInfo();

        // Act
        IdentificationInfoMapper::make($identificationInfo, $identificationInfoFixture['identificationInfo'][0])();

        // Assert
        $this->assertEquals($actualIdentificationInfo, $identificationInfo);
    }
}