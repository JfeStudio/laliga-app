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
            [
                'name_club' => 'Burnley',
                'city_club' => 'Burnley',
            ],
            [
                'name_club' => 'Chelsea',
                'city_club' => 'London',
            ],
            [
                'name_club' => 'Crystal Palace',
                'city_club' => 'London',
            ],
            [
                'name_club' => 'Everton',
                'city_club' => 'Liverpool',
            ],
            [
                'name_club' => 'Fulham',
                'city_club' => 'London',
            ],
            [
                'name_club' => 'Leeds United',
                'city_club' => 'Leeds',
            ]
        ];
        foreach ($teams as $team) {
           Team::create($team);
        }
    }
}
