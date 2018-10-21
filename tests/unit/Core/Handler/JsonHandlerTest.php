<?php

namespace Tests\unit\Core\Handler;

use PHPUnit\Framework\TestCase;
use Qiwi\Core\Handlers\JsonHandler;

/**
 * Class JsonErrorHandlerTest
 * @package Tests\unit\Core\Handler
 */
class JsonHandlerTest extends TestCase
{

    /**
     * @return JsonHandler
     */
    private function makeJsonHandler() : JsonHandler
    {
        return new JsonHandler();
    }

    /**
     * @group unit
     */
    public function testDecode_correctJson_returnArray()
    {
        // Arrange
        $jsonHandler      = $this->makeJsonHandler();
        $correctJson      = '{"name": "Test", "value": 100}';
        $expectArray      = ['name' => 'Test', 'value' => 100];

        // Act
        $result = $jsonHandler->decode($correctJson);

        // Assert
        $this->assertEquals($expectArray, $result);
    }

    /**
     * @group unit
     */
    public function testDecode_inCorrectJson_returnNull()
    {
        // Arrange
        $jsonHandler = $this->makeJsonHandler();
        $correctJson      = '{error-json}';

        // Act
        $result = $jsonHandler->decode($correctJson);

        // Assert
        $this->assertNull($result);
    }

    /**
     * @group unit
     */
    public function testGetError_inCorrectJson_giveErrorMessage()
    {
        // Arrange
        $jsonHandler = $this->makeJsonHandler();
        $correctJson      = '{error-json}';

        // Act
        $jsonHandler->decode($correctJson);

        // Assert
        $this->assertNotNull($jsonHandler->getError());
    }
}