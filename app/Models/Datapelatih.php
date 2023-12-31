<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Datapelatih extends Model
{
    use HasFactory;


    
    
protected $table = 'data_pelatih';
protected $fillable = [
        'id',
        'data_pelatih_id',
        'id_sekolah',
        'nama',
        'id_peserta',
        'hp',
        'alamat',
        'foto',
        'ktp',
        
    ];

    public function pemain()
    {
        return $this->hasMany(Pemain::class, 'data_pelatih_id', 'id');
    }

    public function grub()
    {
        return $this->belongsTo(Grub::class, 'grub_id', 'id');
    }

    public function sekolah()
    {
        return $this->belongsTo(DataSekolah::class, ' id_sekolah', 'id');
    }
    

  
}
