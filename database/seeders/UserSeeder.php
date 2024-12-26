<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $userData =[    
        [
            'Name' => 'admin',
            'email' => 'admin@mail.com',
            'role' => 'admin',
            'password' => bcrypt(12345)
        ],
        [
            'Name' => 'admin 2',
            'email' => 'guest@mail.com',
            'role' => 'admin',
            'password' => bcrypt(12345)
        ]
        ];

        foreach($userData as $key => $val){
            User::create($val);
        }
    }
}
