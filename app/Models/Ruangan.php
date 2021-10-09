<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ruangan extends Model
{
    use HasFactory;

    public function jenis_ruangan()
    {
        return $this->belongsTo(Jenis_ruangan::class);
    }

    public function peminjaman()
    {
        return $this->hasMany(Peminjaman::class);
    }
}
