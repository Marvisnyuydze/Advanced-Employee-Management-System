<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'first_name' => 'Marvis',
            'last_name' => 'Nyuydze',
            'email' => 'nyuydzemarvis13@gmail.com',
            'phone' => '670633615',
            'password' => Hash::make('670633615@1'),
            'is_admin' => true,
        ]);
        DB::table('users')->insert([
            'first_name' => 'User',
            'last_name' => 'One',
            'email' => 'one@user.com',
            'phone' => '670611645',
            'password' => Hash::make('user@1'),
        ]);
    }
}
