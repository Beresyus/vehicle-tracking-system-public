<?php

namespace Database\Factories;

use App\Models\Car;
use App\Models\Company;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Car>
 */
class CarFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $selectedVehicle = array_rand(Car::vehicles);
        $selectedModel = Car::vehicles[$selectedVehicle][array_rand(Car::vehicles[$selectedVehicle])];
        return [ // HIDDEN FOR PUBLIC REPOSITORY
        ];
    }
}
