<?php

namespace Database\Seeders;

use App\Models\{Post, Tag};
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $post = Post::create(['name' => 'Post to edit']);
        $tags[] = Tag::create(['name' => 'First tag']);
        $tags[] = Tag::create(['name' => 'Second tag']);

        // Please note that only the first tag is associate with the post!
        $post->tags()->sync($tags[0]->id);
    }
}
