<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class userSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'uid' => "89839271hus",
            'name' => "Joko Prasetio",
            'email' =>  "dev@developer.com",
            'password' => "developer",
        ]);
    }
}
