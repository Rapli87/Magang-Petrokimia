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
        'id_sekolah',
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

    public function sekolah()
    {
        return $this->belongsTo(DataSekolah::class, 'id_sekolah', 'id');
    }
}
