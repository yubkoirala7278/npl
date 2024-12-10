<?php

namespace Database\Seeders;

use App\Models\Team;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TeamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $teams = [
            'Kathmandu Kings XI',
            'Lalitpur Patriots',
            'Pokhara Rhinos',
            'Biratnagar Warriors',
            'Chitwan Tigers',
            'Janakpur Royals',
            'Bhairahawa Gladiators',
            'Kailali Tigers',
            'Dang Giants',
            'Sudurpashchim Rhinos'
        ];
        foreach ($teams as $teamName) {
            Team::create([
                'name' => $teamName,
            ]);
        }
    }
}
