<?php

namespace Database\Seeders;

use App\Models\Opd;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OPDSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Opd::insert([
            [
                'nama' => 'Dinas Pendidikan',
                'alamat' => 'Jl. Dinas Pendidikan',
                'email' => 'disdik@mbdkab.go.id',
                'website' => 'disdik.malukubaratdayakab.go.id',

            ],
            [
                'nama' => 'Dinas Kesehatan',
                'alamat' => 'Jl. Dinas Kesehatan',
                'email' => 'dinkes@mbdkab.go.id',
                'website' => 'dinkes.malukubaratdayakab.go.id',
            ],

        ]);
    }
}
