<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use App\Command;

class CommandTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() //php artisan db:seed --class=CommandTableSeeder
    {
        $command = Command::firstOrCreate(['command_order' => 'Hello There!', 'command_response' => 'Hi there Mr. Sy', 'is_command' => 0]);
    }
}
