<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PjTim extends Model
{
    use HasFactory;

        
protected $table = 'pjtim';
protected $fillable = [
        'id',
        'pj_tim_id',
        'id_sekolah',
        'nama',
        'jabatan',
        'nip',
        'hp',
        'email',
        'foto',
        'ktp',
        
    
        
    ];
    
    public function sekolah()
{
    return $this->belongsTo(DataSekolah::class, ' id_sekolah', 'id');
}


    public function pemain()
    {
        return $this->hasMany(Pemain::class, 'pj_tim_id', 'id');
    }
    public function datasekolah(){
        return $this->hasMany(Datasekolah::class,'pj_tim_id','id');
    }
    public function grub()
    {
        return $this->belongsTo(Grub::class, 'grub_id', 'id');
    }

}