<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CreateDummyPost extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $posts = ['laravel.org','laravel.com', 'wordpress.org', 'laramust.com'];

        foreach ($posts as $key => $value) {
            Post::create(['title'=>$value]);
        }
    }
}
