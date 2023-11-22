<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class UpdateTimelineRequest extends FormRequest
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
            'title_timeline' => 'required|string|max:100',
            'image_timeline' => 'nullable|image|mimes:jpeg,png,jpg,gif,tmp|max:2048',
            'date_timeline' => 'required|date',
            'description' => 'required|string',
        ];
    }
}
