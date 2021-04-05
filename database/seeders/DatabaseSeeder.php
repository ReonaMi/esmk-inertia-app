<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call(RoleSeeder::class);
        $this->call(JurusanSeeder::class);
        $this->call(KelasSeeder::class);
        $this->call(PengelolaSeeder::class);
        \App\Models\Siswa::factory(1800)->create();
    }
}
