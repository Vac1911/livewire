<?php

use App\Tag;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Tag::insert([
            ['name' => 'Politics'],
            ['name' => 'Economics'],
            ['name' => 'Defense'],
            ['name' => 'Science'],
            ['name' => 'Health'],
        ]);
        $users = factory(App\User::class, 6)
            ->create()
            ->each(function ($user) {
                $user->articles()->saveMany(factory(App\Article::class, rand(8, 16))->make());
            });

        $tags = Tag::all();
        $articles = \App\Article::all();
        foreach($articles as $article)
            $article->tags()->attach($tags->random(random_int(1, 2)));
    }
}
