<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Result extends Model
{
    use HasFactory;

    protected $table = 'results';

    protected $fillable = [
        'round',
        'team1_name',
        'team1_logo',
        'team1_score',
        'team2_name',
        'team2_logo',
        'team2_score',
        'match_date',
        'match_venue',
    ];
}
