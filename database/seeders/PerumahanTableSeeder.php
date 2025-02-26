<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use App\Models\Admin\Perumahan;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PerumahanTableSeeder extends Seeder
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
                'nama' => 'Puri Harmoni 6',
                'slug' => Str::slug('Puri Harmoni 6'),
                'kode_provinsi' => '32',
                'kode_kabupatenkota' => '3201',
                'kode_kecamatan' => '320107',
                'kode_kelurahan' => '3201072009',
                'kode_pos' => '16820',
                'alamat_lengkap' => 'Ds. Situsari, Kec. Cileungsi, Kab. Bogor, Jawa Barat, 16820',
                'created_by' => $user
            ],
            [
                'uuid' => Str::uuid(),
                'nama' => 'Puri Hesti Insani',
                'slug' => Str::slug('Puri Hesti Insani'),
                'kode_provinsi' => '32',
                'kode_kabupatenkota' => '3201',
                'kode_kecamatan' => '320107',
                'kode_kelurahan' => '3201072009',
                'kode_pos' => '16820',
                'alamat_lengkap' => 'Ds. Situsari, Kec. Cileungsi, Kab. Bogor, Jawa Barat, 16820',
                'created_by' => $user
            ],
        ];
        foreach ($input as $item) {
            Perumahan::create($item);
        }
    }
}
