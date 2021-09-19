<?php

namespace Kholyk\Laraphone\Commands;

use Illuminate\Console\Command;

class LaraphoneCommand extends Command
{
    public $signature = 'laraphone';

    public $description = 'My command';

    public function handle()
    {
        $this->comment('All done');
    }
}
