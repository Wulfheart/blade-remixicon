<?php

namespace wulfheart\BladeRemixicon\Tests;

use BladeUI\Icons\BladeIconsServiceProvider;
use Orchestra\Testbench\TestCase as TestCaseAlias;
use wulfheart\BladeRemixicon\RemixiconServiceProvider;

/**
 * Class TestCase
 *
 * @package wulfheart\\Tests
 */
class TestCase extends TestCaseAlias
{
    protected function getPackageProviders($app): array
    {
        return [BladeIconsServiceProvider::class, RemixiconServiceProvider::class];
    }
}
