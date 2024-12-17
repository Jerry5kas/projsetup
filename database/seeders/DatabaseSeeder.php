<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Test;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();


        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);
        User::factory()->create([
            'name' => 'Jerry',
            'email' => 'jerry@gmail.com',
            'password' => '123456789',
        ]);

         Test::factory(30)->create();
         Category::factory(60)->create();

    }
}
