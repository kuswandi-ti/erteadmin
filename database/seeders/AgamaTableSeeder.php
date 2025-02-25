<?php

namespace Database\Seeders;

use App\Models\Admin\Agama;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AgamaTableSeeder extends Seeder
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
                'nama' => 'Islam',
                'slug' => Str::slug('Islam'),
                'created_by' => $user
            ],
            [
                'uuid' => Str::uuid(),
                'nama' => 'Katolik',
                'slug' => Str::slug('Katolik'),
                'created_by' => $user
            ],
            [
                'uuid' => Str::uuid(),
                'nama' => 'Protestan',
                'slug' => Str::slug('Protestan'),
                'created_by' => $user
            ],
            [
                'uuid' => Str::uuid(),
                'nama' => 'Hindu',
                'slug' => Str::slug('Hindu'),
                'created_by' => $user
            ],
            [
                'uuid' => Str::uuid(),
                'nama' => 'Budha',
                'slug' => Str::slug('Budha'),
                'created_by' => $user
            ],
            [
                'uuid' => Str::uuid(),
                'nama' => 'Konghucu',
                'slug' => Str::slug('Konghucu'),
                'created_by' => $user
            ],
            [
                'uuid' => Str::uuid(),
                'nama' => 'Other',
                'slug' => Str::slug('Other'),
                'created_by' => $user
            ],
        ];
        foreach ($input as $item) {
            Agama::create($item);
        }
    }
}
