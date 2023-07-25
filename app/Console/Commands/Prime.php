<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class Prime extends Command
{
    protected $signature = 'prime';

    protected $description = 'Calls cache-related commands (config:cache, route:cache, view:cache, event:cache)';

    public function handle()
    {
        $this->info('Caching configurations...');
        $this->call('config:cache');

        $this->info('Caching routes...');
        $this->call('route:cache');

        $this->info('Caching views...');
        $this->call('view:cache');

        $this->info('Caching events...');
        $this->call('event:cache');

        $this->info('All cache-related commands have been executed successfully!');
    }
}
