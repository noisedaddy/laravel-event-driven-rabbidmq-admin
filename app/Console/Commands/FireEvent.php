<?php

namespace App\Console\Commands;

use App\Jobs\TestFireEventJob;
use Illuminate\Console\Command;

class FireEvent extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:fire-event';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command for testing fire event from mail app from admin app';

    /**
     * Execute the console command.
     */
    public function handle()
    {
         TestFireEventJob::dispatch();
    }
}
