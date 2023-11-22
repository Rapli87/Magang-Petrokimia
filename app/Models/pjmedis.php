<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pjmedis extends Model
{
    use HasFactory;

    protected $table = 'data_pj_medis';

    protected $fillable = [
        'id',
        'data_pjmedis_id',
        'nama',
        'hp',
        'alamat',
        'foto',
        'ktp',
    
        
    ];

 

}
