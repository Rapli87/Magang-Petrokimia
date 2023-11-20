<?php

namespace App\Http\Requests\User;

use Illuminate\Foundation\Http\FormRequest;

class PjsekolahRequest extends FormRequest
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
            'nama_kepala_sekolah' => 'required|max:255',
            'alamat_kepala_sekolah' => 'required|max:255',
            'telp' => 'required|max:255',
            'hp' =>'required|max:255',
            'email' => 'required|max:255',
            'filerekomendasi' => 'required|image|mimes:jpeg,png,jpg,gif,tmp|max:2048', 
        ];
    }
}
