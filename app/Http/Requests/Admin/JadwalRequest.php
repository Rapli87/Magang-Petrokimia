<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class JadwalRequest extends FormRequest
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
            // 'grup' => 'required|max:255',
            'tanggal' => 'required|date',
            'mulai' => 'required|date_format:H:i',
            'selesai' => 'required|date_format:H:i',
            'status' => 'required|max:255',
            'skor' => 'required|max:255',
        ];
    }
}
