<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->createMany([
            [
                'nip' => null,
                'name' => 'Super Admin',
                'email' => 'admin@gmail.com',
                'phone' => '08119999888',
                'nama_jabatan' => null,
                'role' => 1,
                'password' => bcrypt('12345678'),
                'opd_id' => null,
            ],
            [
                'nip' => '222',
                'name' => 'Kaban Keuangan',
                'email' => 'kaban@gmail.com',
                'phone' => '08119999888',
                'nama_jabatan' => 'Kepala Badan Keuangan dan Aset Daerah',
                'role' => 2,
                'password' => bcrypt('12345678'),
                'opd_id' => null,
            ],
            [
                'nip' => '333',
                'name' => 'Kabid Perben',
                'email' => 'kabid@gmail.com',
                'phone' => '08119999888',
                'nama_jabatan' => 'Kepala Bidang Perbendaharaan',
                'role' => 3,
                'password' => bcrypt('12345678'),
                'opd_id' => null,
            ],
            [
                'nip' => '444',
                'name' => 'Verifikator SPP & SPM',
                'email' => 'verif@gmail.com',
                'phone' => '08119999888',
                'nama_jabatan' => 'Kasie Verifikator',
                'role' => 4,
                'password' => bcrypt('12345678'),
                'opd_id' => null,
            ],
            [
                'nip' => '555',
                'name' => 'PPK Dinas Pendidikan',
                'email' => 'ppk@gmail.com',
                'phone' => '08119999888',
                'nama_jabatan' => 'PPK Dinas Pendidikan',
                'role' => 5,
                'password' => bcrypt('12345678'),
                'opd_id' => 1,
            ],
            [
                'nip' => '666',
                'name' => 'Bendahara Dinas Pendidikan',
                'email' => 'bendahara@gmail.com',
                'phone' => '08119999888',
                'nama_jabatan' => 'Bendahara Dinas Pendidikan',
                'role' => 6,
                'password' => bcrypt('12345678'),
                'opd_id' => 1,
            ],
        ]);
    }
}
