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
                'tipe'          => 'ADMIN',
                'username'      => 'admin',
                'nama'          => 'Admin',
                'password'      => Hash::make('admin123'),
                'created_at'    => Carbon::now(),
                'updated_at'    => Carbon::now(),
            ],
            [
                'id_user'       => 2,
                'tipe'          => 'USER',
                'username'      => 'ayleen',
                'nama'          => 'Ayleen',
                'password'      => Hash::make('123'),
                'created_at'    => Carbon::now(),
                'updated_at'    => Carbon::now(),
            ]
        ]);
    }
}
