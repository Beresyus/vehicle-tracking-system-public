<?php


use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\Permission>
 */
class PermissionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $date = new DateTime();
        $rand = rand(1, 14);
        $date->modify("$rand days");
        $result = $date->format("Y-m-d");

        return [
            "whichUser" => User::all('id')->random(),
            "reason" => fake()->randomElement(Permission::reasons),
            "starts_at" => date("Y-m-d"),
            "done_at" => $result,
            "isApproved" => false
        ];
    }
}
