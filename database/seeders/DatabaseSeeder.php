<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use  App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Post::factory(20)->create();
        User::create([
            'name' => 'Mohammed',
            'email' => 'aa@aa.com',
            'password' => \Hash::make(env('USER_PASSWORD'))
        ]);
    }
}
