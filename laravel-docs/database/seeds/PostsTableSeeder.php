<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() //run php artisan db:seed --class=PostsTableSeeder in terminal
    {
        DB::table('posts')->insert([
            'title' => str_random(15),
            'content' => str_random(50).'is a content.',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
    }
}
