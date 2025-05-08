<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Post;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 1; $i <=10; $i++) {
            Post::create([
                'title' => 'Post '.$i
            ]);
        }
        // insert into posts (title) VALUES ('Post 1');
    }
}
