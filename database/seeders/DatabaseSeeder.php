<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        DB::table('loans')->delete();
        DB::table('books')->delete();
        DB::table('categories')->delete();
        DB::table('user')->delete();

        $this->call([
            UserSeeder::class,
            Categorie::class,
            Book::class,
            Loan::class,
        ]);
    }
}
