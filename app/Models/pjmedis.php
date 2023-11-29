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
        'id_sekolah',
        'data_pjmedis_id',
        'nama',
        'hp',
        'alamat',
        'foto',
        'ktp',
    
        
    ];
    public function pemain()
    {
        return $this->hasMany(Pemain::class, 'data_pjmedis_id', 'id');
    }

    public function sekolah()
    {
        return $this->belongsTo(DataSekolah::class, 'id_sekolah', 'id');
    }

 

}
