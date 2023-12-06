<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Datasuportersiswa extends Model
{
    use HasFactory;

    
    protected $table = 'data_pj_supporter_siswa';
protected $fillable = [
        'id',
        'id_sekolah', 
        'data_supportersiswa_id',
        'nama',
        'hp',
        'alamat',
        'foto',
        'ktp',
    
        
    ];

    public function pemain()
    {
        return $this->hasMany(Pemain::class, 'data_supportersiswa_id', 'id');
    }
    public function sekolah()
    {
        return $this->belongsTo(DataSekolah::class, 'id_sekolah', 'id');
    }
}
