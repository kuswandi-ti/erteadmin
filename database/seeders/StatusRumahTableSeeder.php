<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use App\Models\Admin\StatusRumah;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class StatusRumahTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = 'Super Admin';

        $input = [
            [
                'uuid' => Str::uuid(),
                'nama' => 'Milik Sendiri',
                'slug' => Str::slug('Milik Sendiri'),
                'created_by' => $user
            ],
            [
                'uuid' => Str::uuid(),
                'nama' => 'Milik Saudara',
                'slug' => Str::slug('Milik Saudara'),
                'created_by' => $user
            ],
            [
                'uuid' => Str::uuid(),
                'nama' => 'Kontrak',
                'slug' => Str::slug('Kontrak'),
                'created_by' => $user
            ],
        ];
        foreach ($input as $item) {
            StatusRumah::create($item);
        }
    }
}
