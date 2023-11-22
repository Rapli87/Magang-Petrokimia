<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Klasemen extends Model
{
    use HasFactory;
    protected $table = "klasemens";
    protected $fillable = [
        'group',
        'rank',
        'team_name',
        'played',
        'won',
        'drawn',
        'lost',
        'goals_for',
        'goals_against',
        'goal_difference',
        'points',
    ];

    // Jika Anda ingin menambahkan metode atau relasi, lakukan di sini
    // Misalnya:
    // public function namaMetode() {
    //     // logika metode
    // }
}
