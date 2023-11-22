<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class UpdateKlasemenRequest extends FormRequest
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
            'group' => 'required|string',
            'team_name' => 'required|string',
            'played' => 'required|integer',
            'won' => 'required|integer',
            'drawn' => 'required|integer',
            'lost' => 'required|integer',
            'goals_for' => 'required|integer',
            'goals_against' => 'required|integer',
            // Tambahkan aturan validasi lainnya sesuai kebutuhan
        ];
    }
}
