<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;


class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $category_names = [
            'Fiction',
            'Non-Fiction',
            'History',
            'Science',
            'Children',
            'Romance',
        ];

        foreach($category_names as $name){
            Category::create([
                'category_name' => $name,
            ]);
        }
    }
}
