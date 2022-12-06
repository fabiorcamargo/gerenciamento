<?php

namespace Database\Seeders;

use App\Models\User;
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
        User::create([
            'name' => 'Fábio Camargo',
            'email' => 'fabiorcamargo@gmail.com',
            'password' => bcrypt('277888'),
            'role' => 1,
        ]);
    }
}
