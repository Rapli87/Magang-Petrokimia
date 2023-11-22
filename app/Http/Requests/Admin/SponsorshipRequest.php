<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class SponsorshipRequest extends FormRequest
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
            'name_sponsorship' => 'required|string|max:100', // Validasi untuk nama
            'image_sponsorship' => 'required|image|mimes:jpeg,png,jpg,gif,tmp|max:2048', // Validasi untuk gambar
        ];
    }
}
