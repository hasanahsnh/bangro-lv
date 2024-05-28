<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ornamen extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_ornamen',
        'deskripsi_ornamen',
        'jenis_ornamen',
        'foto_ornamen',
        'kategori',
    ];
}
