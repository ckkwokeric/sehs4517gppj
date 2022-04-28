<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $users = [
            [
                'first_name' => 'Chun Kit',
                'last_name' => 'KWOK',
                'email' => 'kck@gmail.com',
                'gender' => 'male',
                'password' => Hash::make('sehs123456'),
                'phone_no' => '54024075',
                'dob' => '1998-01-12',
                'is_admin' => 1,
            ],
            [
                'first_name' => 'Wing Yin',
                'last_name' => 'Tang',
                'email' => 'twy@gmail.com',
                'gender' => 'male',
                'password' => Hash::make('sehs123456'),
                'phone_no' => '55221234',
                'dob' => '2000-09-10',
                'is_admin' => 1,
            ],
            [
                'first_name' => 'Yik Tung',
                'last_name' => 'CHAN',
                'email' => 'cyt@gmail.com',
                'gender' => 'female',
                'password' => Hash::make('sehs123456'),
                'phone_no' => '55221234',
                'dob' => '2000-09-12',
                'is_admin' => null,
            ],
            [
                'first_name' => 'Mark',
                'last_name' => 'CHAN',
                'email' => 'mark@gmail.com',
                'gender' => 'male',
                'password' => Hash::make('sehs123456'),
                'phone_no' => '55221234',
                'dob' => '1999-10-28',
                'is_admin' => null,
            ],
            [
                'first_name' => 'Man Shan',
                'last_name' => 'HO',
                'email' => 'hms@gmail.com',
                'gender' => 'female',
                'password' => Hash::make('sehs123456'),
                'phone_no' => '55221234',
                'dob' => '2001-03-17',
                'is_admin' => null,
            ],
        ];


        foreach($users as $user) {
            User::create([
                'first_name' => $user['first_name'],
                'last_name' => $user['last_name'],
                'email' => $user['email'],
                'gender' => $user['gender'],
                'password' => $user['password'],
                'phone_no' => $user['phone_no'],
                'dob' => $user['dob'],
                'is_admin' => $user['is_admin'],
            ]);
        }

    }
}
