<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Grub extends Model
{
    use HasFactory;

    protected $fillable = [
        'tim',
        'main',
        'menang',
        'kalah',
        'seri',
        'poin',
        'gol',
        'gol_k',
        'selisih',
        'peringkat',
        'grup',
        'id_sekolah',
        'id_klasemen',
        'id_user',
    ];


    public function jadwals()
    {
        return $this->belongsTo(Jadwal::class, 'grup_id', 'id');

       
    }

  // Grub.php

public function klasemen()
{
    return $this->belongsTo(Klasemen::class, 'id_klasemen', 'id');
}


  

}
