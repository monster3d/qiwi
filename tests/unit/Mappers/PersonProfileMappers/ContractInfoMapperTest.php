<?php

namespace Tests\unit\Mappers\PersonProfileMappers;


use PHPUnit\Framework\TestCase;
use Qiwi\Elements\PersonProfile\ContractInfo;
use Qiwi\Mappers\PersonProfileMappers\ContractInfoMapper;
use Tests\Fixtures\Fixture;
use Tests\Fixtures\FixtureManager;

/**
 * Class ContractInfoMapperTest
 * @package Tests\unit\Mappers\PersonProfileMappers
 */
class ContractInfoMapperTest extends TestCase
{

    /**
     * @return Fixture
     */
    private function makeFixtureManager() : ?Fixture
    {
        return FixtureManager::make('PersonProfile', 'contractInfo');
    }

    /**
     * @return ContractInfo
     */
    private function makeContractInfo() : ContractInfo
    {
        return new ContractInfo();
    }

    /**
     * @return ContractInfo
     */
    private function makeActualContractInfoInfo() : ContractInfo
    {
        $contractInfo = new ContractInfo();
        $contractInfo
            ->setBlocked(false)
            ->setContractId(79683851815)
            ->setCreationDate('2017-01-07T16:51:06.100Z')
            ->setFeatures([]);

        return $contractInfo;
    }

    /**
     * @group unit
     * @covers ContractInfoMapper::make
     */
    public function testMake_ContactInfo_returnVoid()
    {
        // Arrange
        $fixtureManager      = $this->makeFixtureManager();
        $contractInfo        = $this->makeContractInfo();
        $contractInfoFixture = $fixtureManager->getAsArray();
        $actualContractInfo  = $this->makeActualContractInfoInfo();

        // Act
        ContractInfoMapper::make($contractInfo, $contractInfoFixture['contractInfo'])();

        // Assert
        $this->assertEquals($actualContractInfo, $contractInfo);
    }
}