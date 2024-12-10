<?php

namespace Database\Seeders;

use App\Models\Season;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SeasonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $seasons = [
            'Season One',
            'Season Two',
            'Season Three',
            'Season Four',
            'Season Five',
            'Season Six',
            'Season Seven',
            'Season Eight',
            'Season Nine',
            'Season Ten',
        ];
        
        foreach ($seasons as $season) {
            Season::create([
                'name' => $season,
            ]);
        }
    }
}
