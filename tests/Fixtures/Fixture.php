<?php

namespace Tests\Fixtures;


use stdClass;

/**
 * Class Fixture
 * @package Tests\Fixtures
 */
final class Fixture
{
    /**
     * @var string
     */
    private $fixtureData;

    /**
     * Fixture constructor.
     * @param string $fixtureData
     */
    public function __construct(string $fixtureData)
    {
        $this->fixtureData = $fixtureData;
    }

    /**
     * @return array
     */
    public function getAsArray() : array
    {
        return json_decode($this->fixtureData, true);
    }

    public function getAsStdObject() : stdClass
    {
        return json_decode($this->fixtureData);
    }
}