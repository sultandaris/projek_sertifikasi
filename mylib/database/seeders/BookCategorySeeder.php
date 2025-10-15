<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\BookCategory;

class BookCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $list = [
            ['book_id' => 1, 'category_id' => 1],

            // To Kill a Mockingbird: Fiction
            ['book_id' => 2, 'category_id' => 1],

            // 1984: Fiction & Science
            ['book_id' => 3, 'category_id' => 1],
            ['book_id' => 3, 'category_id' => 4],

            // Pride and Prejudice: Romance
            ['book_id' => 4, 'category_id' => 6],

            // The Catcher in the Rye: Fiction & Children
            ['book_id' => 5, 'category_id' => 1],
            ['book_id' => 5, 'category_id' => 5],
        ];

        foreach($list as $item){
            BookCategory::create($item);
        }
    }
}
