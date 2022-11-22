<?php
//This file created by command ________php artisan make:command CommandName
namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;

class CreateUser extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'create:user {count}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create Numbeer of User you passed in argument ';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {   
        User::factory()->count($this->argument('count'))->create();
        return Command::SUCCESS;
    }
}
