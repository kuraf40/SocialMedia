<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Tag;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tags=['Tech','Health','Travel','Food','Lifestyle','Education','Entertainment','Sports','Finance','Fashion','Science','Politics','Environment','Art','History',
        'Culture','Music','Movies','Books','Gaming','Photography','Fitness','Wellness','Business','Startups','Marketing','Social Media','Productivity','Self Improvement','Mental Health','Relationships','Parenting',
        'Career','Motivation','Inspiration','DIY','Crafts','Home Decor','Gardening','Pets','Automotive','Real Estate','Legal','Technology News','Gadgets','Apps','Software Development',
        'Web Development','Mobile Development','Artificial Intelligence','Machine Learning','Data Science','Cybersecurity','Cloud Computing','Blockchain','Cryptocurrency','Virtual Reality','Augmented Reality'];

        foreach($tags as $tag){
            Tag::create([
                'nom'=>$tag,
            ]);
        }
    }

}
