<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::create([
            'id'  => 1,
            'name' => 'Admin',
            'email' => 'adminboy@gmail.com',
            'password' => bcrypt('12345678'),
            'gender' => 'Laki-laki',
            'role' => 'admin',
        ]);
    }
}
