<?php


use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory(3)->create();

        User::factory()->create([
            "name" => "Yıldız Yazılım",
            "isSA" => false,
            "isActive" => true,
            "email" => "vts@beresyus.dev",
            "password" => "1"
        ]);

        User::factory()->create([
            "name" => "Yusuf YILDIZ",
            "isSA" => true,
            "isActive" => true,
            "email" => "ats-admin@beresyus.dev",
            "password" => "1"
        ]);
    }
}
