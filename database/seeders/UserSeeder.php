<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user=[
            [
                'name'      =>  'admin',
                'email'     =>  'admin@gmail.com',
                'role'      =>  'admin',
                'password'  =>  bcrypt('123456')
            ],
            [
                'name'      =>  'user',
                'email'     =>  'user@gmail.com',
                'role'      =>  'user',
                'password'  =>  bcrypt('123456')
            ],
            ];

            foreach($user as $key => $val){
                User::updateOrCreate($val );
            }
    }
}
