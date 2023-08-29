<?php

namespace Database\Seeders;

use App\Models\Route;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RouteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Route::factory()->create([
            "whichCar" => 10,
            "isDone" => true,
            "pointLocations" => '{"pointLocations":[]}', // DATA HIDDEN FOR PUBLIC REPOSITORY
            "created_at" => "2023-07-31 19:10:59",
            "updated_at" => "2023-07-31 19:47:59"
        ]);

        Route::factory()->create([
            "whichCar" => 10,
            "isDone" => true,
            "pointLocations" => '{"pointLocations":[]}', // DATA HIDDEN FOR PUBLIC REPOSITORY
            "created_at" => "2023-08-04 23:10:40",
            "updated_at" => "2023-08-04 23:49:45"
        ]);
    }
}
