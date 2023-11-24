<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class jurnalis extends Model
{
    use HasFactory;

    protected $table = 'jurnalis';

    protected $fillable = [
        'id',
        'data_jurnallis_id',
        'nama',
        'hp',
        'alamat',
        'foto',
        'ktp',
    
        
    ];

    public function pemain()
    {
        return $this->hasMany(Pemain::class, 'data_jurnallis_id', 'id');
    }
}
