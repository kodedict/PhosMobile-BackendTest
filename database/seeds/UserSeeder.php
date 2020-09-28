<?php

use Illuminate\Database\Seeder;
use App\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //seeding user table

        $users  =  [
            [
                'name'     => 'olumayokun olayinka',
                'email'    => 'olumaykunolayinka@gmail.com',
                'password' => bcrypt('123')
            ],
            [
                'name'     => 'olomolaiye Shalom',
                'email'    => 'shalomolomo@gmail.com',
                'password' => bcrypt('123')
            ],
            [
                'name'     => 'James Blunt',
                'email'    => 'james.blunt@gmail.com',
                'password' => bcrypt('123')
            ],
            [
                'name'     => 'Lisa Grey',
                'email'    => 'lisa.grey@gmail.com',
                'password' => bcrypt('123')
            ],
            [
                'name'     => 'Danny Rose',
                'email'    => 'dannyrose2k@gmail.com',
                'password' => bcrypt('123')
            ]

        ];


        foreach ($users as $userValue){
            $user = new User;
            $user['name']     = $userValue['name'];
            $user['email']    = $userValue['email'];
            $user['password'] = $userValue['password'];

            $user->save();
        }


    }
}
