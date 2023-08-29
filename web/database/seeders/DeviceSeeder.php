<?php

namespace Database\Seeders;

use App\Models\Device;

use App\Models\RecordFrequency;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DeviceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Device::factory(9)->create();

        // HIDDEN FOR PUBLIC REPOSITORY
    }
}
