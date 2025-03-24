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
        User::create([
            "name"=> "Manager",
            'role_id'=> 1,
            "email"=> "manager@hmail.com",
            "password"=> bcrypt("secret"),
        ]);

        User::factory()->count(15)->create();
    }
}
