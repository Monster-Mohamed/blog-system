<?php

namespace Database\Seeders;

use App\Models\Tag;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // Schema::disableForeignKeyConstraints();
        // \App\Models\User::truncate();
        \App\Models\Role::factory(2)->create();
        $users = \App\Models\User::factory(20)->create();
        foreach ($users as $user) {
            $user->photo()->save(\App\Models\Photo::factory()->make());
        }
        \App\Models\Category::factory(10)->create();
        $posts = \App\Models\Post::factory(100)->create();
        \App\Models\Comment::factory(120)->create();
        \App\Models\Tag::factory(20)->create();
        foreach ($posts as $post) {
            $tags_ids = [];
            $tags_ids[] = Tag::all()->random(1)[0]->id;
            $tags_ids[] = Tag::all()->random(1)[0]->id;
            $tags_ids[] = Tag::all()->random(1)[0]->id;
            $post->tags()->sync($tags_ids);
            $post->photo()->save(\App\Models\Photo::factory()->make());
        }
    }
}
