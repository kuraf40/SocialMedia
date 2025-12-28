<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Database\Seeders\UsersTableSeeder;
use Database\Seeders\TagSeeder;
use Database\Seeders\TypeMediaSeeder;
use Database\Seeders\ReactionSeeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        $this->call([
            UsersTableSeeder::class,
            TagSeeder::class,
            TypeMediaSeeder::class,
            ReactionSeeder::class,  
            LangueSeeder::class
        ]);

      /* 
       User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        */
    }
}
