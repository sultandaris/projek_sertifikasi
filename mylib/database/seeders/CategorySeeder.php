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
        $category_list = [
            'Fiction',
            'Non-Fiction',
            'History',
            'Science',
            'Children',
            'Romance',
        ];

        foreach($category_list as $name){
            Category::create(attributes: [
                'category_name' => $name
            ]);
        }
    }
}
