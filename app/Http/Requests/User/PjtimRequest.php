<?php

namespace App\Http\Requests\User;

use Illuminate\Foundation\Http\FormRequest;

class PjtimRequest extends FormRequest
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
            //
            'id' => 'max:255', // 'id' => 'required|max:255
            'id_sekolah' => 'max:255', // 'id_sekolah' => 'required|max:255
            'pj_tim_id' => 'max:255',
            'nama' => 'required|max:255',
            'jabatan' => 'required|max:255',
            'nip' => 'required|max:255',
            'hp' =>'required|max:255',
            'email' => 'required|max:255',
            'filerekomendasi'=>'required|image|mimes:jpeg,png,jpg,gif,tmp|max:2048',
            'foto' => 'required|image|mimes:jpeg,png,jpg,gif,tmp|max:2048', 
            'ktp' => 'required|image|mimes:jpeg,png,jpg,gif,tmp|max:2048', 
        ];
    }
}
