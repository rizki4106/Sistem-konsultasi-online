<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengguna extends Model
{
    use HasFactory;

    protected $fillable = ["nama", "email", "password", "foto", "nomor_identitas", "jabatan", "dibuat_pada"];
    protected $hidden = ["password", "dibuat_pada"];

    public function projek(){
        return $this->hasMany(Projek::class);
    }

    public function activity(){
        return $this->hasMany(Activity::class);
    }

    public function komentar(){
        return $this->hasMany(Komentar::class);
    }
}
