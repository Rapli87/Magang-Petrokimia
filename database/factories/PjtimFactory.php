<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\PjTim;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\PjTim>
 */
class PjtimFactory extends Factory
{
    protected $model = PjTim::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        
        return [
            'id' => $this->faker->randomNumber(),
            'pj_tim_id' => $this->faker->randomNumber(),
            'id_sekolah' => $this->faker->randomNumber(),
            'nama' => $this->faker->name,
            'jabatan' => $this->faker->word,
            'nip' => $this->faker->phoneNumber,
            'hp' => $this->faker->phoneNumber,
            'email' => $this->faker->email,
            'filerekomendasi' => $this->faker->word,
            'foto' => $this->faker->word,
            'ktp' => $this->faker->word,
        ];
    }
}
