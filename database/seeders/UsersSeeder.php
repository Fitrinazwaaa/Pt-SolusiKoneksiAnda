<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Foundation\Auth\User;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $userData = [
            [
                'name'      => 'Mas Bagas',
                'email'     => 'bagas123@gmail.com',
                'role'      => 'user',
                'password'  => bcrypt('123456')
            ],
            [
                'name'      => 'Mas Gunawan',
                'email'     => 'gunawan123@gmail.com',
                'role'      => 'user',
                'password'  => bcrypt('123456')
            ],
            [
                'name'      => 'kurishani',
                'email'     => 'kurishani123@gmail.com',
                'role'      => 'admin',
                'password'  => bcrypt('111111')
            ],
        ];
        foreach($userData as $key => $val){
            User::create($val);
        }
    }
}