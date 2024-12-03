<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Post;

class PostSeeder extends Seeder
{
    public function run()
    {
        Post::create([
            'title' => 'Hello World',
            'content' => 'This is the first post!',
        ]);

        Post::create([
            'title' => 'Learning Laravel',
            'content' => 'Laravel makes development faster and easier.',
        ]);
    }
}

