<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Pengelola;

class PengelolaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $superadmin = Pengelola::create([
            'nama_lengkap' => 'Sigit Boworaharjo',
            'email' => 'sigit@superadmin.test',
            'password' => bcrypt('12345678'),
            'deskripsi' => 'Superadmin',
            'jurusan_id' => null
        ]);

        $superadmin->assignRole('superadmin');

        $admin = Pengelola::create([
            'nama_lengkap' => 'Sigit Boworaharjo',
            'email' => 'sigit@admin.test',
            'password' => bcrypt('12345678'),
            'deskripsi' => 'Admin',
            'jurusan_id' => null
        ]);

        $admin->assignRole('admin');

        $kesiswaan = Pengelola::create([
            'nama_lengkap' => 'Sundoyo',
            'email' => 'sundaya@kesiswaan.test',
            'password' => bcrypt('12345678'),
            'deskripsi' => 'Kesiswaan',
            'jurusan_id' => null
        ]);

        $kesiswaan->assignRole('kesiswaan');

        $toolman0 = Pengelola::create([
            'nama_lengkap' => 'Yoga',
            'email' => 'yoga@toolman.test',
            'password' => bcrypt('12345678'),
            'deskripsi' => 'Toolman',
            'jurusan_id' => 7
        ]);

        $toolman0->assignRole('toolman');

        $toolman1 = Pengelola::create([
            'nama_lengkap' => 'Tjudin',
            'email' => 'tjudin@toolman.test',
            'password' => bcrypt('12345678'),
            'deskripsi' => 'Tjudin',
            'jurusan_id' => 3
        ]);

        $toolman1->assignRole('toolman');
    }
}
