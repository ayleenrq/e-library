<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class Book extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('books')->insert([
            [
                'id_book' => 1,
                'id_category' => 1,
                'title' => 'Fiction',
                'author' => 'Non-Fiction',
                'publisher' => 'Science',
                'year_published' => 'History',
                'isbn' => 'Biography',
                'pages' => 'Education',
                'stock' => 'Health',
                'location' => 'Cooking',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ]);
    }
}
