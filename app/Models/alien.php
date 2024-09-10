<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class alien extends Model
{
    use HasFactory;

    protected $fillable = [
        'nomeAlien',
        'nomeEspecie',
        'origemAlien',
        'omnitrix',
    ];
}
