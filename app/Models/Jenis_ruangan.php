<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jenis_ruangan extends Model
{
    use HasFactory;

    public function gedung()
    {
        return $this->belongsToMany(Gedung::class);
    }

    public function ruangan()
    {
        return $this->hasMany(Ruangan::class);
    }
}
