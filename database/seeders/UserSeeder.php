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
        $players = [
            ['name' => 'Paras Khadka', 'email' => 'paras.khadka@cricket.com', 'password' => bcrypt('password123')],
            ['name' => 'Sandeep Lamichhane', 'email' => 'sandeep.lamichhane@cricket.com', 'password' => bcrypt('password123')],
            ['name' => 'Gyanendra Malla', 'email' => 'gyanendra.malla@cricket.com', 'password' => bcrypt('password123')],
            ['name' => 'Rohit Kumar Paudel', 'email' => 'rohit.paudel@cricket.com', 'password' => bcrypt('password123')],
            ['name' => 'Kushal Malla', 'email' => 'kushal.malla@cricket.com', 'password' => bcrypt('password123')],
            ['name' => 'Sharneel Dangi', 'email' => 'sharneel.dangi@cricket.com', 'password' => bcrypt('password123')],
            ['name' => 'Dipendra Singh Airee', 'email' => 'dipendra.airee@cricket.com', 'password' => bcrypt('password123')],
            ['name' => 'Bishal Giri', 'email' => 'bishal.giri@cricket.com', 'password' => bcrypt('password123')],
            ['name' => 'Pradeep Airee', 'email' => 'pradeep.airee@cricket.com', 'password' => bcrypt('password123')],
            ['name' => 'Sompal Kami', 'email' => 'sompal.kami@cricket.com', 'password' => bcrypt('password123')]
        ];

        // Insert the players into the users table
        foreach ($players as $player) {
            User::create([
                'name' => $player['name'],
                'email' => $player['email'],
                'password' => $player['password'],
            ]);
        }
    }
}
