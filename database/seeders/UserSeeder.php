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
            "email"=> "manager@hmail.com",
            'email_verified_at'=> now(),
            "password"=> bcrypt("secret"),
        ]);

        User::factory()->count(15)->create();
    }
}
