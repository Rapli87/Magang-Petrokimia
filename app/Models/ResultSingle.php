<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ResultSingle extends Model
{
    use HasFactory;

    protected $table = 'result_singles';

    protected $fillable = [
        'result_id',
        'team1_name',
        'team1_logo',
        'team1_score',
        'team1_scorers',
        'team1_scorers_minutes',
        'team1_penalty',
        'team1_ball_possession',
        'team1_goals',
        'team1_shots_on_target',
        'team1_shots',
        'team1_saves',
        'team1_yellow_cards',
        'team1_red_cards',
        'team2_name',
        'team2_logo',
        'team2_score',
        'team2_scorers',
        'team2_scorers_minutes',
        'team2_penalty',
        'team2_ball_possession',
        'team2_goals',
        'team2_shots_on_target',
        'team2_shots',
        'team2_saves',
        'team2_yellow_cards',
        'team2_red_cards',
    ];

    public function result()
    {
        return $this->belongsTo(Result::class, 'result_id');
    }

    public function getRoundAttribute()
    {
        // Misalkan round berada dalam result_id
        // Sesuaikan ini dengan hubungan antara result_id dan round
        return $this->result->round;
    }
}
