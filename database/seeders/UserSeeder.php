<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('user')->insert([
            [
                'id_user'       => 1,
                'role'          => 'ADMIN',
                'name'          => 'Admin',
                'email'         => 'admin@admin.com',
                'password'      => Hash::make('admin123'),
                'telp'          => '08123456789',
                'address'       => 'Jl. Soekarno Hatta',
                'created_at'    => Carbon::now(),
                'updated_at'    => Carbon::now(),
            ],
            [
                'id_user'       => 2,
                'role'          => 'USER',
                'name'          => 'Ayleen',
                'email'         => 'ayleen@ayleen.com',
                'password'      => Hash::make('123'),
                'telp'          => '088231322175',
                'address'       => 'Jl. Mawar Indah',
                'created_at'    => Carbon::now(),
                'updated_at'    => Carbon::now(),
            ]
        ]);
    }
}
