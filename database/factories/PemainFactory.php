<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Pemain;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Pemain>
 */
class PemainFactory extends Factory
{
    protected $model = Pemain::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'id' => $this->faker->randomNumber(),
            'name' => $this->faker->name,
            'id_sekolah' => $this->faker->randomNumber(),
            'data_sekolah_id' => $this->faker->randomNumber(),
            'pj_sekolah_id' => $this->faker->randomNumber(),
            'pj_tim_id' => $this->faker->randomNumber(),
            'data_pelatih_id' => $this->faker->randomNumber(),
            'data_official_id' => $this->faker->randomNumber(),
            'data_manajer_id' => $this->faker->randomNumber(),
            'data_supportersiswa_id' => $this->faker->randomNumber(),
            'data_supporterguru_id' => $this->faker->randomNumber(),
            'data_pjmedis_id' => $this->faker->randomNumber(),
            'data_jurnallis_id' => $this->faker->randomNumber(),
            'No_punggung' => $this->faker->randomNumber(),
            'Kelas' => $this->faker->word,
            'Tanggal_lahir' => $this->faker->date,
            'Ijasah' => $this->faker->word,
            'Rapor' => $this->faker->word,
            'Keterangan_Siswa' => $this->faker->word,
            'Kartu_Siswa' => $this->faker->word,
            'Foto' => $this->faker->word,
        ];
    }
}
