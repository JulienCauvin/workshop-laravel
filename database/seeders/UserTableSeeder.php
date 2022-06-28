<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::factory()
            ->has(Post::factory()->count(3))
            ->create([
                'name' => 'Test User',
                'email' => 'test@example.com',
            ]);

        User::factory()
            ->count(9)
            ->has(Post::factory()->count(3))
            ->create();
    }
}
