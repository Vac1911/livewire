<?php

use App\Models\Tag;
use App\Models\User;
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
        $users = factory(User::class, 6)
            ->create()
            ->each(function ($user) {
                $user->articles()->saveMany(factory(App\Models\Article::class, rand(8, 16))->make());
            });

        $tags = Tag::all();
        $articles = \App\Models\Article::all();
        foreach($articles as $article)
            $article->tags()->attach($tags->random(random_int(1, 2)));

        User::create([
            'name' => 'Andrew',
            'email' => 'andrew@quasars.com',
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => 'Kc6XJZwN7i',
        ]);
    }
}
