<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sponsorship extends Model
{
    use HasFactory;

    protected $table = "sponsorships";
    protected $primaryKey = "id";
    protected $fillable = [
        'name_sponsorship',
        'image_sponsorship'
    ];
}
