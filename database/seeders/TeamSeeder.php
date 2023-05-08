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
            [
                'name_club' => 'Arsenal',
                'city_club' => 'London',
            ],
            [
                'name_club' => 'Aston Villa',
                'city_club' => 'Birmingham',
            ],
            [
                'name_club' => 'Brighton & Hove Albion',
                'city_club' => 'Brighton',
            ],
        ];
        foreach ($teams as $team) {
           Team::create($team);
        }
    }
}
