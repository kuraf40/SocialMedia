<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Reaction;

class ReactionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $reactions = ['like', 'love', 'haha', 'wow', 'sad', 'angry', 'care', 'thumbs_up', 'thumbs_down', 'clap', 'fire', 'star', 'heart_eyes', 'cry', 'laugh', 'surprised'];
        foreach($reactions as $reaction){
            Reaction::create([
                'nom' => $reaction,
            ]);
        }
    }
}
