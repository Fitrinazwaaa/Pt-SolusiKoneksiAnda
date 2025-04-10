<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Foundation\Auth\User;

class UsersSeeder extends Seeder
{
    public function run(): void
    {
        $userData = [
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