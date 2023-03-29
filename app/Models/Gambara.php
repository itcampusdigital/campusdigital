<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gambara extends Model
{
    use HasFactory;

    protected $table = "gambaras";
	
    protected $fillable = [
        'judul_gambar',
        'gambar',

    ];
}
