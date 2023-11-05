<?php

namespace Digitlimit\Gender\Tests;

use Orchestra\Testbench\TestCase as BaseTestCase;
use Digitlimit\Gender\GenderServiceProvider;

class TestCase extends BaseTestCase
{
    public function setUp(): void
    {
        parent::setUp();
    }
  
    protected function getPackageProviders($app)
    {
        return [
            GenderServiceProvider::class,
        ];
    }

    public function packagePath(string $path='')
    {
        return __DIR__ . "/../" . $path;
    }
}