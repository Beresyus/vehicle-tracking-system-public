<?php


use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\Attendance>
 */
class AttendanceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $date = fake()->dateTimeBetween('-1 months', 'now', 'Europe/Istanbul');

        return [
            "didQuit" => fake()->boolean(90),
            "created_at" => $date,
            "updated_at" => $date->modify('+8 hours')
        ];
    }
}
