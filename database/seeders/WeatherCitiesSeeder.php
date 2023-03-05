<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class WeatherCitiesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('weather')->insert([
            'city' => 'New York',
            'latitude' => '43.0004',
            'longitude' => '-75.4999',
        ]);

        DB::table('weather')->insert([
            'city' => 'Miami',
            'latitude' => '25.7743',
            'longitude' => '-80.1937',
        ]);
        
        DB::table('weather')->insert([
            'city' => 'Chicago',
            'latitude' => '41.85',
            'longitude' => '-87.65',
        ]);
    }
}
