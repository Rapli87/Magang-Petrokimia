<?php

namespace App\Http\Requests\User;

use Illuminate\Foundation\Http\FormRequest;

class OfficialRequest extends FormRequest
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
            'data_official_id' => 'required|max:255', // 'data_official_id' => 'required|max:255
            'nama' => 'required|max:255',
            'hp' => 'required|max:255',
            'alamat' => 'required|max:255',
            'foto' => 'required|image|mimes:jpeg,png,jpg,gif,tmp|max:2048', 
            'ktp' => 'required|image|mimes:jpeg,png,jpg,gif,tmp|max:2048', 
        ];
    }
}
