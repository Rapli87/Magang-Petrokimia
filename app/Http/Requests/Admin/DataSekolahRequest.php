<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class DataSekolahRequest extends FormRequest
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
            'Nama_Sekolah' => 'required|max:255',
            'Telp' => 'required|max:255',
            'Fax' => 'required|max:255',
            'Email' => 'required|max:255',
            // 'home_team_logo' => 'required|max:255',
            // 'away_team_logo' => 'required|max:255',
            'Tanggal_update' => 'required|date', // Hanya menerima file gambar dengan ekstensi tertentu (JPEG, PNG, JPG, GIF) dan ukuran maksimum 2MB.
            'Logo' => 'required|image|mimes:jpeg,png,jpg,gif,tmp|max:2048',
        ];
    }
}
