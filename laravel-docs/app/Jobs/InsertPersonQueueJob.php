<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use App\sample_model2;

class InsertPersonQueueJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     *
     * @return void
     */

    protected $name;
    protected $age;

    public function __construct($name,$age)
    {
        $this->name = $name;
        $this->age = $age;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        sample_model2::create(['name' => $this->name, 'age' => $this->age]);
    }
}
