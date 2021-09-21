<?php

namespace Kholyk\Laraphone\Tests;

use Illuminate\Database\Eloquent\Factories\Factory;
use Kholyk\Laraphone\LaraphoneServiceProvider;
use Orchestra\Testbench\TestCase as Orchestra;

class TestCase extends Orchestra
{
    protected function setUp(): void
    {
        parent::setUp();

        Factory::guessFactoryNamesUsing(
            fn (string $modelName) => 'Kholyk\\Laraphone\\Database\\Factories\\'.class_basename($modelName).'Factory'
        );
    }

    protected function getPackageProviders($app)
    {
        return [
            LaraphoneServiceProvider::class,
        ];
    }

    public function getEnvironmentSetUp($app)
    {
        config()->set('database.default', 'testing');

        /*
        $migration = include __DIR__.'/../database/migrations/create_laraphone_table.php.stub';
        $migration->up();
        */
    }
}
