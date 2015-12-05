<?php

namespace Fromz\FromzPackage\Commands;

use App\Commands\Command;
use Illuminate\Contracts\Bus\SelfHandling;

class FromzCommand extends Command implements SelfHandling
{
    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Execute the command.
     *
     * @return void
     */
    public function handle()
    {
        //
    }
}
