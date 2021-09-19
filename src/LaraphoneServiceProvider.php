<?php

namespace Kholyk\Laraphone;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Kholyk\Laraphone\Commands\LaraphoneCommand;

class LaraphoneServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laraphone')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_laraphone_table')
            ->hasCommand(LaraphoneCommand::class);
    }
}
