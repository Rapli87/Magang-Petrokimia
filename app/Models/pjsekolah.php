<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pjsekolah extends Model
{
    use HasFactory;

    
protected $table = 'pjsekolah';
protected $fillable = [
        'id',
        'id_sekolah',
        'pj_sekolah_id',
        'nama_kepala_sekolah',
        'alamat_kepala_sekolah',
        'telp',
        'hp',
        'email',
        'filerekomendasi',
       
        
    ];

  // pjsekolah.php

public function sekolah()
{
    return $this->belongsTo(DataSekolah::class, ' id_sekolah', 'id');
}

    
    public function pemain()
    {
        return $this->hasMany(Pemain::class, 'pj_sekolah_id', 'id');
    }

    public function grub()
    {
        return $this->belongsTo(Grub::class, 'grub_id', 'id');
    }


}
