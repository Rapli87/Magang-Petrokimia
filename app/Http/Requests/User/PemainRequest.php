<?php

namespace App\Http\Requests\User;

use Illuminate\Foundation\Http\FormRequest;

class PemainRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'data_sekolah_id' => 'required|max:255',
            'pj_sekolah_id' => 'required|max:255',
            'pj_tim_id' => 'required|max:255',
            'data_pelatih_id'=> 'required|max:255',
            'data_official_id'=> 'required|max:255',
            'data_manajer_id'=> 'required|max:255',
            'data_supportersiswa_id'=> 'required|max:255',
            'data_supporterguru_id'=> 'required|max:255',

            'name' => 'required|max:255',
            'No_punggung' => 'required|max:255',
            'Tanggal_lahir' => 'required|date',
            'Ijasah' => 'required|image|mimes:jpeg,png,jpg,gif,tmp|max:2048',
            'Rapor' => 'required|image|mimes:jpeg,png,jpg,gif,tmp|max:2048',
            'Keterangan_Siswa' => 'required|max:255',
            'Kartu_Siswa' => 'required|image|mimes:jpeg,png,jpg,gif,tmp|max:2048',
            'Foto' => 'required|image|mimes:jpeg,png,jpg,gif,tmp|max:2048',

        ];
    }
}
