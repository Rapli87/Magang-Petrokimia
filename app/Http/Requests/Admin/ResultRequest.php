<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class ResultRequest extends FormRequest
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
            'round' => 'required|string',
            'team1_name' => 'required|string',
            'team1_logo' => 'required|image|mimes:jpeg,png,jpg,gif,tmp|max:2048', // Hanya menerima file gambar dengan ekstensi tertentu (JPEG, PNG, JPG, GIF) dan ukuran maksimum 2MB.
            'team1_score' => 'required|nullable|string', // Skor tim 1 dapat berupa angka atau "coming soon"
            'team2_name' => 'required|string',
            'team2_logo' => 'required|image|mimes:jpeg,png,jpg,gif,tmp|max:2048', // Hanya menerima file gambar dengan ekstensi tertentu (JPEG, PNG, JPG, GIF) dan ukuran maksimum 2MB.
            'team2_score' => 'required|nullable|string', // Skor tim 2 dapat berupa angka atau "coming soon"
            'match_date' => 'required|date',
            'match_venue' => 'required|string',
        ];
    }
}
