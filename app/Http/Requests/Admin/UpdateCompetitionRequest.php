<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateCompetitionRequest extends FormRequest
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
            'date' => 'required|date',
            // 'match_number' => 'required|numeric',
            'match_number' => [
                'required',
                'numeric',
                Rule::unique('competitions')->ignore($this->route('competition')),
            ],
            'match' => 'required|string|max:255',
            'time' => 'nullable',
            'location' => 'required|string|max:255',
            'round' => 'required|string|max:255',
        ];
    }
}
