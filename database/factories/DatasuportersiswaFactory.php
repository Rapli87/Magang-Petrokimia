<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Datasuportersiswa;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Datasuportersiswa>
 */
class DatasuportersiswaFactory extends Factory
{
    protected $model = Datasuportersiswa::class;
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
            'data_supportersiswa_id'=>$this->faker->randomNumber(),
            'nama'=>$this->faker->name,
            'hp'=>$this->faker->phoneNumber,
            'alamat'=>$this->faker->word,
            'foto'=>$this->faker->word,
            'ktp'=>$this->faker->word,
        ];
    }
}
