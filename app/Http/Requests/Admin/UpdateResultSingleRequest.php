<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class UpdateResultSingleRequest extends FormRequest
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
            'result_id' => 'required|exists:results,id',
            'team1_name' => 'required|string',
            'team1_logo' => 'nullable|image|mimes:jpeg,png,jpg,gif,tmp|max:2048',
            'team1_score' => 'required|nullable|string',
            'team1_scorers' => 'nullable|string',
            'team1_scorers_minutes' => 'nullable|string',
            'team1_penalty' => 'required|integer',
            'team1_ball_possession' => 'required|numeric',
            'team1_goals' => 'required|integer',
            'team1_shots_on_target' => 'required|integer',
            'team1_shots' => 'required|integer',
            'team1_saves' => 'required|integer',
            'team1_yellow_cards' => 'required|integer',
            'team1_red_cards' => 'nullable|integer',
            'team2_name' => 'required|string',
            'team2_logo' => 'nullable|image|mimes:jpeg,png,jpg,gif,tmp|max:2048',
            'team2_score' => 'required|nullable|string',
            'team2_scorers' => 'nullable|string',
            'team2_scorers_minutes' => 'nullable|string',
            'team2_penalty' => 'required|integer',
            'team2_ball_possession' => 'required|numeric',
            'team2_goals' => 'required|integer',
            'team2_shots_on_target' => 'required|integer',
            'team2_shots' => 'required|integer',
            'team2_saves' => 'required|integer',
            'team2_yellow_cards' => 'required|integer',
            'team2_red_cards' => 'required|integer',
        ];
    }
}
