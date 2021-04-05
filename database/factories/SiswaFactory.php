<?php

namespace Database\Factories;

use App\Models\Siswa;
use Illuminate\Database\Eloquent\Factories\Factory;

class SiswaFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Siswa::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nama_lengkap' => $this->faker->name,
            'kelas_id' => $this->faker->numberBetween(1,55),
            'email' => $this->faker->unique()->safeEmail,
            'password' => bcrypt('password'),
            'alamat' => $this->faker->address,
            'kode_pos' => 62115,
            'latitude' => $this->faker->latitude,
            'longitude' => $this->faker->longitude,
            'tahun_masuk' => '2019',
            'status' => 'aktif',
            'no_ponsel' => $this->faker->e164PhoneNumber,
            'nama_ibu' => $this->faker->name,
        ];
    }
}
