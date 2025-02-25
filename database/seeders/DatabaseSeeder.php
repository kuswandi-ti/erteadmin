<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\FormatDateTableSeeder;
use Database\Seeders\FormatTimeTableSeeder;
use Database\Seeders\SettingSystemTableSeeder;
use Database\Seeders\RolePermissionTableSeeder;
use KodePandai\Indonesia\IndonesiaDatabaseSeeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // $this->call(RolePermissionTableSeeder::class);
        // $this->call(SettingSystemTableSeeder::class);
        // $this->call(FormatDateTableSeeder::class);
        // $this->call(FormatTimeTableSeeder::class);
        // $this->call(IndonesiaDatabaseSeeder::class);
    }
}
