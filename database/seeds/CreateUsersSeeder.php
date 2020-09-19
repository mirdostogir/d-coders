<?php

use Illuminate\Database\Seeder;
use App\User;

class CreateUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = [
            [
               'name'=>'Admin',
               'email'=>'mir.dostogir@hotmail.com',
                'is_admin'=>'1',
               'password'=> bcrypt('mir@42111762'),
            ],
            [
               'name'=>'User',
               'email'=>'mirdostogir7@gmail.com',
                'is_admin'=>'0',
               'password'=> bcrypt('mir@4211'),
            ],
        ];
  
        foreach ($user as $key => $value) {
            User::create($value);
        }
    }
}
