<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataOfficial extends Model
{
    use HasFactory;

    
    
protected $table = 'data_official';
protected $fillable = [
        'id',
        'id_sekolah',
        'data_official_id',
        'nama',
        'hp',
        'alamat',
        'foto',
        'ktp',
        
        
    ];

    public function pemain()
    {
        return $this->hasMany(Pemain::class, 'data_official_id', 'id');
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
