<?php

namespace TiborHegedus\GitVersion\Tests;

use Orchestra\Testbench\TestCase as Orchestra;
use TiborHegedus\GitVersion\GitVersionServiceProvider;

class TestCase extends Orchestra
{
    public function setUp(): void
    {
        parent::setUp();
    }

    protected function getPackageProviders($app)
    {
        return [
            GitVersionServiceProvider::class,
        ];
    }
}
