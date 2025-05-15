<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    private $categories = [
        [
            'name' => 'Sport',
        ],
        [
            'name' => 'Politica'
        ],
        [
            'name' => 'Attualità e cronaca'
        ]
    ];
    
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        foreach($this->categories as $category)
        {
            Category::create([
                "name" => $category['name']
            ]);
        }
    }
}
