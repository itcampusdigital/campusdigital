<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class gallery extends Model
{
    use HasFactory;

    protected $table = "galleries";
	public $timestamps = false;
    protected $fillable = [
        'judul_gambar',
        'gambar',

    ];
}
