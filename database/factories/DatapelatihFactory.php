<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

use App\Models\Datapelatih;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Datapelatih>
 */
class DatapelatihFactory extends Factory
{
    protected $model = Datapelatih::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'id' => $this->faker->randomNumber(),
            'data_pelatih_id' => $this->faker->randomNumber(),
            'id_sekolah' => $this->faker->randomNumber(),
            'nama' => $this->faker->name,
            'id_peserta' => $this->faker->randomNumber(),
            'hp' => $this->faker->phoneNumber,
            'alamat' => $this->faker->word,
            'foto' => $this->faker->word,
            'ktp' => $this->faker->word,
        ];
    }
}
