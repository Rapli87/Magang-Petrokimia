<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\pjmedis; 

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\pjmedis>
 */
class pjmedisFactory extends Factory
{
    protected $model = pjmedis::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'id'=>$this->faker->randomNumber(),
            'id_sekolah'=>$this->faker->randomNumber(),
            'data_pjmedis_id'=>$this->faker->randomNumber(),
            'nama'=>$this->faker->name,
            'hp'=>$this->faker->phoneNumber,
            'alamat'=>$this->faker->word,
            'foto'=>$this->faker->word,
            'ktp'=>$this->faker->word,
        ];
    }
}
