<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Pjsekolah;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Pjsekolah>
 */
class PjsekolahFactory extends Factory
{
    protected $model = pjsekolah::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'id' => $this->faker->randomNumber(),
            'id_sekolah' => $this->faker->randomNumber(),
            'pj_sekolah_id' => $this->faker->randomNumber(),
            'nama_kepala_sekolah' => $this->faker->name,
            'alamat_kepala_sekolah' => $this->faker->address,
            'telp' => $this->faker->phoneNumber,
            'hp' => $this->faker->phoneNumber,
            'email' => $this->faker->email,
            'filerekomendasi' => $this->faker->word,
          
        ];
    }
}
