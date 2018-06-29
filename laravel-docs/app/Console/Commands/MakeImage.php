<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

use Image;

class MakeImage extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'make:image {color}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'It will create a blank png image';

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
        $color = $this->argument('color');

        for($a = 0; $a < 10; $a++)
        {
            $img = Image::canvas(800, 600, $color);
            $img->save('public/ImageGenerator/greybox'.$a.'.png');
        }

    }
}
