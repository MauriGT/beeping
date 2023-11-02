<?php

namespace App\Console\Commands;

use App\Jobs\TotalCostsJob;
use App\Models\Order;
use Illuminate\Console\Command;

class CalculateTotalCostCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'calculate:totalCosts';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Calculate the total cost of all orders';

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
     * @return int
     */
    public function handle()
    {
        TotalCostsJob::dispatch()->onQueue('totalCosts');
    }
}
