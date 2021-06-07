<?php

namespace App\Console\Commands;

use App\Models\Reseller;
use Illuminate\Console\Command;

class PackageSync extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'hostbucket:sync';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Xelenic hostbucket sync package details';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        Reseller::sync_packages(1);
    }
}
