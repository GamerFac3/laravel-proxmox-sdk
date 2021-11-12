<?php

namespace GamerFac3\LaravelProxmoxSdk;

use GamerFac3\LaravelProxmoxSdk\Commands\LaravelProxmoxSdkCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class LaravelProxmoxSdkServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-proxmox-sdk')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_laravel-proxmox-sdk_table')
            ->hasCommand(LaravelProxmoxSdkCommand::class);
    }
}
