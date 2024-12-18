<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Post;
use App\Models\Comment;
use Illuminate\Database\Seeder;

class CommentSeeder extends Seeder
{

    public function run()
    {
        // Create 20 comments for each post
        Post::all()->each(function ($post) {
            $post->comments()->createMany(Comment::factory(20)->make()->toArray());
        });
    }
}
