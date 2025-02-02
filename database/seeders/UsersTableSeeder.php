<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                //admin
            'name'=>'Akhlaque',
            'email'=>'akhlaque@gmail.com',
            'password'=>Hash::make('password'),
            'role_as'=>'1',
            ]
        ]);
    }
}
