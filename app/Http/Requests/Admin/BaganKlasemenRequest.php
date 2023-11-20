<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class BaganKlasemenRequest extends FormRequest
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
            'tim' => 'required|max:255',
            'menang' => 'required|max:255',
            'kalah' => 'required|max:255',
            'seri' => 'required|max:255',
            'poin' => 'required|max:255',
            'gol' => 'require|max:225',
            'selisih' => 'required|max:255',
            'peringkat' => 'required|max:255',
            'grup' => 'required|max:255',
        ];
    }
}
