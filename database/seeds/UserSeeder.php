<?php

use Illuminate\Database\Seeder;

use App\Role;
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
        User::create([
            'name' => 'Darma Wiryanata',
            'email' => 'darmawiryanata@gmail.com',
            'password' => Hash::make('12345678')
        ])
            ->roles()
            ->attach(Role::where('name', 'admin')->first());
    }
}
