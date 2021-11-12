<?php

namespace GamerFac3\LaravelProxmoxSdk\Commands;

use Illuminate\Console\Command;

class LaravelProxmoxSdkCommand extends Command
{
    public $signature = 'laravel-proxmox-sdk';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
