<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\User::create([
            'first_name' => 'Mr.',
            'last_name' => 'Admin',
            'email' => 'admin@ccoph.com',
            'password' => Hash::make('password'),
            'phone' => '0123654789',
        ]);
    }
}
