<?php

namespace Tests\unit\Requests;


use PHPUnit\Framework\TestCase;
use Qiwi\Requests\PersonProfileRequest;
use Qiwi\Requests\RequestBuilder;
use Qiwi\Settings;

/**
 * Class RequestBuilderTest
 * @package Tests\unit\Requests
 */
class RequestBuilderTest extends TestCase
{

    /**
     * @return RequestBuilder
     */
    private function makeRequestBuilder() : RequestBuilder
    {
        return new RequestBuilder(Settings::GLOBAL_VERSION_API);
    }

    /**
     * @group unit
     * @covers RequestBuilder::buildPersonProfile
     */
    public function testBuildPersonProfile_returnPersonProfileRequest()
    {
        // Arrange
        $requestBuilder = $this->makeRequestBuilder();

        // Act
        $personProfileRequest = $requestBuilder->buildPersonProfile(false, false, false);

        // Assert
        $this->assertInstanceOf(PersonProfileRequest::class, $personProfileRequest);
    }

    /**
     * @group unit
     * @covers RequestBuilder::buildPersonProfile
     */
    public function testBuildPersonProfile_whenAuthInfoEnabled_returnPersonProfileWhenAuthInfoEnabled()
    {
        // Arrange
        $requestBuilder = $this->makeRequestBuilder();

        // Act
        $personProfile = $requestBuilder->buildPersonProfile(true, false, false);
        $urlParams     = $personProfile->getUrlParams();

        // Assert
        $this->assertInstanceOf(PersonProfileRequest::class, $personProfile);
        $this->assertTrue(array_key_exists('authInfoEnabled', $urlParams));
        $this->assertTrue($urlParams['authInfoEnabled']);
    }

    /**
     * @group unit
     * @covers RequestBuilder::buildPersonProfile
     */
    public function testBuildPersonProfile_whenContractInfoEnabled_returnPersonProfileWhenContractInfoEnabled()
    {
        // Arrange
        $requestBuilder = $this->makeRequestBuilder();

        // Act
        $personProfile = $requestBuilder->buildPersonProfile(false, true, false);
        $urlParams     = $personProfile->getUrlParams();

        // Assert
        $this->assertInstanceOf(PersonProfileRequest::class, $personProfile);
        $this->assertTrue(array_key_exists('contractInfoEnabled', $urlParams));
        $this->assertTrue($urlParams['contractInfoEnabled']);
    }

    /**
     * @group unit
     * @covers RequestBuilder::buildPersonProfile
     */
    public function testBuildPersonProfile_whenUserInfoEnabled_returnPersonProfileWhenUserInfoEnabled()
    {
        // Arrange
        $requestBuilder = $this->makeRequestBuilder();

        // Act
        $personProfile = $requestBuilder->buildPersonProfile(false, false, true);
        $urlParams     = $personProfile->getUrlParams();

        // Assert
        $this->assertInstanceOf(PersonProfileRequest::class, $personProfile);
        $this->assertTrue(array_key_exists('userInfoEnabled', $urlParams));
        $this->assertTrue($urlParams['userInfoEnabled']);
    }
}