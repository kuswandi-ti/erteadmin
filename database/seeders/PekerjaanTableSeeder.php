<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use App\Models\Admin\Pekerjaan;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PekerjaanTableSeeder extends Seeder
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
                'nama' => 'BELUM/TIDAK BEKERJA',
                'slug' => Str::slug('BELUM/TIDAK BEKERJA'),
                'created_by' => $user
            ],
            [
                'nama' => 'PEGAWAI NEGERI SIPIL',
                'uuid' => Str::uuid(),
                'slug' => Str::slug('PEGAWAI NEGERI SIPIL'),
                'created_by' => $user
            ],
            [
                'nama' => 'TENTARA NASIONAL INDONESIA',
                'uuid' => Str::uuid(),
                'slug' => Str::slug('TENTARA NASIONAL INDONESIA'),
                'created_by' => $user
            ],
            [
                'nama' => 'KEPOLISIAN',
                'uuid' => Str::uuid(),
                'slug' => Str::slug('KEPOLISIAN'),
                'created_by' => $user
            ],
            [
                'nama' => 'KARYAWAN BUMN',
                'uuid' => Str::uuid(),
                'slug' => Str::slug('KARYAWAN BUMN'),
                'created_by' => $user
            ],
            [
                'nama' => 'KARYAWAN BUMD',
                'uuid' => Str::uuid(),
                'slug' => Str::slug('KARYAWAN BUMD'),
                'created_by' => $user
            ],
            [
                'nama' => 'ANGGOTA DPR',
                'uuid' => Str::uuid(),
                'slug' => Str::slug('ANGGOTA DPR'),
                'created_by' => $user
            ],
            [
                'nama' => 'ANGGOTA MPR',
                'uuid' => Str::uuid(),
                'slug' => Str::slug('ANGGOTA MPR'),
                'created_by' => $user
            ],
            [
                'nama' => 'ANGGOTA DPD',
                'uuid' => Str::uuid(),
                'slug' => Str::slug('ANGGOTA DPD'),
                'created_by' => $user
            ],
            [
                'nama' => 'ANGGOTA BPK',
                'uuid' => Str::uuid(),
                'slug' => Str::slug('ANGGOTA BPK'),
                'created_by' => $user
            ],
            [
                'nama' => 'PRESIDEN',
                'uuid' => Str::uuid(),
                'slug' => Str::slug('PRESIDEN'),
                'created_by' => $user
            ],
            [
                'nama' => 'WAKIL PRESIDEN',
                'uuid' => Str::uuid(),
                'slug' => Str::slug('WAKIL PRESIDEN'),
                'created_by' => $user
            ],
            [
                'nama' => 'ANGGOTA MAHKAMAH KONSTITUSI',
                'uuid' => Str::uuid(),
                'slug' => Str::slug('ANGGOTA MAHKAMAH KONSTITUSI'),
                'created_by' => $user
            ],
            [
                'nama' => 'ANGGOTA KABINET/KEMENTERIAN',
                'uuid' => Str::uuid(),
                'slug' => Str::slug('ANGGOTA KABINET/KEMENTERIAN'),
                'created_by' => $user
            ],
            [
                'nama' => 'DUTA BESAR',
                'uuid' => Str::uuid(),
                'slug' => Str::slug('DUTA BESAR'),
                'created_by' => $user
            ],
            [
                'nama' => 'GUBERNUR',
                'uuid' => Str::uuid(),
                'slug' => Str::slug('GUBERNUR'),
                'created_by' => $user
            ],
            [
                'nama' => 'WAKIL GUBERNUR',
                'uuid' => Str::uuid(),
                'slug' => Str::slug('WAKIL GUBERNUR'),
                'created_by' => $user
            ],
            [
                'nama' => 'BUPATI',
                'uuid' => Str::uuid(),
                'slug' => Str::slug('BUPATI'),
                'created_by' => $user
            ],
            [
                'nama' => 'WAKIL BUPATI',
                'uuid' => Str::uuid(),
                'slug' => Str::slug('WAKIL BUPATI'),
                'created_by' => $user
            ],
            [
                'nama' => 'WALIKOTA',
                'uuid' => Str::uuid(),
                'slug' => Str::slug('WALIKOTA'),
                'created_by' => $user
            ],
            [
                'nama' => 'WAKIL WALIKOTA',
                'uuid' => Str::uuid(),
                'slug' => Str::slug('WAKIL WALIKOTA'),
                'created_by' => $user
            ],
            [
                'nama' => 'ANGGOTA DPRD PROVINSI',
                'uuid' => Str::uuid(),
                'slug' => Str::slug('ANGGOTA DPRD PROVINSI'),
                'created_by' => $user
            ],
            [
                'nama' => 'ANGGOTA DPRD KABUPATEN/KOTA',
                'uuid' => Str::uuid(),
                'slug' => Str::slug('ANGGOTA DPRD KABUPATEN/KOTA'),
                'created_by' => $user
            ],
            [
                'nama' => 'PENGACARA',
                'uuid' => Str::uuid(),
                'slug' => Str::slug('PENGACARA'),
                'created_by' => $user
            ],
            [
                'nama' => 'NOTARIS',
                'uuid' => Str::uuid(),
                'slug' => Str::slug('NOTARIS'),
                'created_by' => $user
            ],
            [
                'nama' => 'PENELITI',
                'uuid' => Str::uuid(),
                'slug' => Str::slug('PENELITI'),
                'created_by' => $user
            ],
            [
                'nama' => 'PERANGKAT DESA',
                'uuid' => Str::uuid(),
                'slug' => Str::slug('PERANGKAT DESA'),
                'created_by' => $user
            ],
            [
                'nama' => 'KEPALA DESA',
                'uuid' => Str::uuid(),
                'slug' => Str::slug('KEPALA DESA'),
                'created_by' => $user
            ],
            [
                'nama' => 'DOSEN',
                'uuid' => Str::uuid(),
                'slug' => Str::slug('DOSEN'),
                'created_by' => $user
            ],
            [
                'nama' => 'GURU',
                'uuid' => Str::uuid(),
                'slug' => Str::slug('GURU'),
                'created_by' => $user
            ],
            [
                'nama' => 'PERDAGANGAN',
                'uuid' => Str::uuid(),
                'slug' => Str::slug('PERDAGANGAN'),
                'created_by' => $user
            ],
            [
                'nama' => 'INDUSTRI',
                'uuid' => Str::uuid(),
                'slug' => Str::slug('INDUSTRI'),
                'created_by' => $user
            ],
            [
                'nama' => 'KONSTRUKSI',
                'uuid' => Str::uuid(),
                'slug' => Str::slug('KONSTRUKSI'),
                'created_by' => $user
            ],
            [
                'nama' => 'TRANSPORTASI',
                'uuid' => Str::uuid(),
                'slug' => Str::slug('TRANSPORTASI'),
                'created_by' => $user
            ],
            [
                'nama' => 'KARYAWAN SWASTA',
                'uuid' => Str::uuid(),
                'slug' => Str::slug('KARYAWAN SWASTA'),
                'created_by' => $user
            ],
            [
                'nama' => 'KARYAWAN HONORER',
                'uuid' => Str::uuid(),
                'slug' => Str::slug('KARYAWAN HONORER'),
                'created_by' => $user
            ],
            [
                'nama' => 'BURUH HARIAN LEPAS',
                'uuid' => Str::uuid(),
                'slug' => Str::slug('BURUH HARIAN LEPAS'),
                'created_by' => $user
            ],
            [
                'nama' => 'PEMBANTU RUMAH TANGGA',
                'uuid' => Str::uuid(),
                'slug' => Str::slug('PEMBANTU RUMAH TANGGA'),
                'created_by' => $user
            ],
            [
                'nama' => 'TUKANG CUKUR',
                'uuid' => Str::uuid(),
                'slug' => Str::slug('TUKANG CUKUR'),
                'created_by' => $user
            ],
            [
                'nama' => 'TUKANG LISTRIK',
                'uuid' => Str::uuid(),
                'slug' => Str::slug('TUKANG LISTRIK'),
                'created_by' => $user
            ],
            [
                'nama' => 'TUKANG BATU',
                'uuid' => Str::uuid(),
                'slug' => Str::slug('TUKANG BATU'),
                'created_by' => $user
            ],
            [
                'nama' => 'TUKANG KAYU',
                'uuid' => Str::uuid(),
                'slug' => Str::slug('TUKANG KAYU'),
                'created_by' => $user
            ],
            [
                'nama' => 'TUKANG SOL SEPATU',
                'uuid' => Str::uuid(),
                'slug' => Str::slug('TUKANG SOL SEPATU'),
                'created_by' => $user
            ],
            [
                'nama' => 'TUKANG LAS/PANDAI BESI',
                'uuid' => Str::uuid(),
                'slug' => Str::slug('TUKANG LAS/PANDAI BESI'),
                'created_by' => $user
            ],
            [
                'nama' => 'TUKANG JAHIT',
                'uuid' => Str::uuid(),
                'slug' => Str::slug('TUKANG JAHIT'),
                'created_by' => $user
            ],
            [
                'nama' => 'TUKANG GIGI',
                'uuid' => Str::uuid(),
                'slug' => Str::slug('TUKANG GIGI'),
                'created_by' => $user
            ],
            [
                'nama' => 'PENATA RIAS',
                'uuid' => Str::uuid(),
                'slug' => Str::slug('PENATA RIAS'),
                'created_by' => $user
            ],
            [
                'nama' => 'PENATA BUSANA',
                'uuid' => Str::uuid(),
                'slug' => Str::slug('PENATA BUSANA'),
                'created_by' => $user
            ],
            [
                'nama' => 'PENATA RAMBUT',
                'uuid' => Str::uuid(),
                'slug' => Str::slug('PENATA RAMBUT'),
                'created_by' => $user
            ],
            [
                'nama' => 'MEKANIK',
                'uuid' => Str::uuid(),
                'slug' => Str::slug('MEKANIK'),
                'created_by' => $user
            ],
            [
                'nama' => 'SENIMAN',
                'uuid' => Str::uuid(),
                'slug' => Str::slug('SENIMAN'),
                'created_by' => $user
            ],
            [
                'nama' => 'TABIB',
                'uuid' => Str::uuid(),
                'slug' => Str::slug('TABIB'),
                'created_by' => $user
            ],
            [
                'nama' => 'PARAJI',
                'uuid' => Str::uuid(),
                'slug' => Str::slug('PARAJI'),
                'created_by' => $user
            ],
            [
                'nama' => 'PERANCANG BUSANA',
                'uuid' => Str::uuid(),
                'slug' => Str::slug('PERANCANG BUSANA'),
                'created_by' => $user
            ],
            [
                'nama' => 'PENTERJEMAH',
                'uuid' => Str::uuid(),
                'slug' => Str::slug('PENTERJEMAH'),
                'created_by' => $user
            ],
            [
                'nama' => 'WARTAWAN',
                'uuid' => Str::uuid(),
                'slug' => Str::slug('WARTAWAN'),
                'created_by' => $user
            ],
            [
                'nama' => 'JURU MASAK',
                'uuid' => Str::uuid(),
                'slug' => Str::slug('JURU MASAK'),
                'created_by' => $user
            ],
            [
                'nama' => 'PROMOTOR ACARA',
                'uuid' => Str::uuid(),
                'slug' => Str::slug('PROMOTOR ACARA'),
                'created_by' => $user
            ],
            [
                'nama' => 'PILOT',
                'uuid' => Str::uuid(),
                'slug' => Str::slug('PILOT'),
                'created_by' => $user
            ],
            [
                'nama' => 'ARSITEK',
                'uuid' => Str::uuid(),
                'slug' => Str::slug('ARSITEK'),
                'created_by' => $user
            ],
            [
                'nama' => 'AKUNTAN',
                'uuid' => Str::uuid(),
                'slug' => Str::slug('AKUNTAN'),
                'created_by' => $user
            ],
            [
                'nama' => 'KONSULTAN',
                'uuid' => Str::uuid(),
                'slug' => Str::slug('KONSULTAN'),
                'created_by' => $user
            ],
            [
                'nama' => 'PENYIAR TELEVISI',
                'uuid' => Str::uuid(),
                'slug' => Str::slug('PENYIAR TELEVISI'),
                'created_by' => $user
            ],
            [
                'nama' => 'PENYIAR RADIO',
                'uuid' => Str::uuid(),
                'slug' => Str::slug('PENYIAR RADIO'),
                'created_by' => $user
            ],
            [
                'nama' => 'PELAUT',
                'uuid' => Str::uuid(),
                'slug' => Str::slug('PELAUT'),
                'created_by' => $user
            ],
            [
                'nama' => 'SOPIR',
                'uuid' => Str::uuid(),
                'slug' => Str::slug('SOPIR'),
                'created_by' => $user
            ],
            [
                'nama' => 'PIALANG',
                'uuid' => Str::uuid(),
                'slug' => Str::slug('PIALANG'),
                'created_by' => $user
            ],
            [
                'nama' => 'PARANORMAL',
                'uuid' => Str::uuid(),
                'slug' => Str::slug('PARANORMAL'),
                'created_by' => $user
            ],
            [
                'nama' => 'PEDAGANG',
                'uuid' => Str::uuid(),
                'slug' => Str::slug('PEDAGANG'),
                'created_by' => $user
            ],
            [
                'nama' => 'WIRASWASTA',
                'uuid' => Str::uuid(),
                'slug' => Str::slug('WIRASWASTA'),
                'created_by' => $user
            ],
            [
                'nama' => 'PETANI/PEKEBUN',
                'uuid' => Str::uuid(),
                'slug' => Str::slug('PETANI/PEKEBUN'),
                'created_by' => $user
            ],
            [
                'nama' => 'PETERNAK',
                'uuid' => Str::uuid(),
                'slug' => Str::slug('PETERNAK'),
                'created_by' => $user
            ],
            [
                'nama' => 'BURUH TANI/PERKEBUNAN',
                'uuid' => Str::uuid(),
                'slug' => Str::slug('BURUH TANI/PERKEBUNAN'),
                'created_by' => $user
            ],
            [
                'nama' => 'BURUH PETERNAKAN',
                'uuid' => Str::uuid(),
                'slug' => Str::slug('BURUH PETERNAKAN'),
                'created_by' => $user
            ],
            [
                'nama' => 'NELAYAN/PERIKANAN',
                'uuid' => Str::uuid(),
                'slug' => Str::slug('NELAYAN/PERIKANAN'),
                'created_by' => $user
            ],
            [
                'nama' => 'BURUH NELAYAN/PERIKANAN',
                'uuid' => Str::uuid(),
                'slug' => Str::slug('BURUH NELAYAN/PERIKANAN'),
                'created_by' => $user
            ],
            [
                'nama' => 'IMAM MASJID',
                'uuid' => Str::uuid(),
                'slug' => Str::slug('IMAM MASJID'),
                'created_by' => $user
            ],
            [
                'nama' => 'PENDETA',
                'uuid' => Str::uuid(),
                'slug' => Str::slug('PENDETA'),
                'created_by' => $user
            ],
            [
                'nama' => 'PASTOR',
                'uuid' => Str::uuid(),
                'slug' => Str::slug('PASTOR'),
                'created_by' => $user
            ],
            [
                'nama' => 'USTADZ/MUBALIGH',
                'uuid' => Str::uuid(),
                'slug' => Str::slug('USTADZ/MUBALIGH'),
                'created_by' => $user
            ],
            [
                'nama' => 'BIARAWATI',
                'uuid' => Str::uuid(),
                'slug' => Str::slug('BIARAWATI'),
                'created_by' => $user
            ],
            [
                'nama' => 'PELAJAR/MAHASISWA',
                'uuid' => Str::uuid(),
                'slug' => Str::slug('PELAJAR/MAHASISWA'),
                'created_by' => $user
            ],
            [
                'nama' => 'DOKTER',
                'uuid' => Str::uuid(),
                'slug' => Str::slug('DOKTER'),
                'created_by' => $user
            ],
            [
                'nama' => 'BIDAN',
                'uuid' => Str::uuid(),
                'slug' => Str::slug('BIDAN'),
                'created_by' => $user
            ],
            [
                'nama' => 'PERAWAT',
                'uuid' => Str::uuid(),
                'slug' => Str::slug('PERAWAT'),
                'created_by' => $user
            ],
            [
                'nama' => 'APOTEKER',
                'uuid' => Str::uuid(),
                'slug' => Str::slug('APOTEKER'),
                'created_by' => $user
            ],
            [
                'nama' => 'PSIKIATER/PSIKOLOG',
                'uuid' => Str::uuid(),
                'slug' => Str::slug('PSIKIATER/PSIKOLOG'),
                'created_by' => $user
            ],
            [
                'nama' => 'PENSIUNAN',
                'uuid' => Str::uuid(),
                'slug' => Str::slug('PENSIUNAN'),
                'created_by' => $user
            ],
            [
                'nama' => 'MENGURUS RUMAH TANGGA',
                'uuid' => Str::uuid(),
                'slug' => Str::slug('MENGURUS RUMAH TANGGA'),
                'created_by' => $user
            ],
            [
                'nama' => 'LAINNYA',
                'uuid' => Str::uuid(),
                'slug' => Str::slug('LAINNYA'),
                'created_by' => $user
            ],
        ];
        foreach ($input as $item) {
            Pekerjaan::create($item);
        }
    }
}
