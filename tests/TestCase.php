<?php

namespace Digitlimit\Gender\Tests;

use Orchestra\Testbench\TestCase as BaseTestCase;
use Digitlimit\Gender\GenderServiceProvider;

class TestCase extends BaseTestCase
{
    public function setUp(): void
    {
        parent::setUp();
        // additional setup
    }
  
    protected function getPackageProviders($app)
    {
        return [
            GenderServiceProvider::class,
        ];
    }
  
    protected function getEnvironmentSetUp($app)
    {
        // perform environment setup
    }

    public function packagePath(string $path='')
    {
        return __DIR__ . "/../" . $path;
    }
}