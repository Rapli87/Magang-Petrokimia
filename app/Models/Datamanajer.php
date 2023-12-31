<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Datamanajer extends Model
{
    use HasFactory;

    protected $table = 'data_manajer';
protected $fillable = [
        'id',
        'data_manajer_id',
        'id_sekolah',
        'nama',
        'hp',
        'alamat',
        'foto',
        'ktp',
    
        
    ];

    public function pemain()
    {
        return $this->hasMany(Pemain::class, 'data_manajer_id', 'id');
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
