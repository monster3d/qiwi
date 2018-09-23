<?php

namespace Tests\Fixtures;

/**
 * Class FixtureManager
 * @package Tests\Fixtures
 */
final class FixtureManager
{
    /**
     * @param string $module
     * @param string $name
     * @return null|Fixture
     */
    public static function make(string $module, string $name) : ?Fixture
    {
        $fixture = null;

        $path = sprintf('%s/%s.json', $module, $name);

        if (file_exists($path)) {
            $content = file_get_contents($path);
            $fixture = new Fixture($content);
        }

        return $fixture;
    }
}