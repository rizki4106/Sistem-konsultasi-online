<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    use HasFactory;

    protected $fillable = ["judul", "deskripsi", "file_id", "projek_id", "dosen_id"];

    public function file(){
        return $this->hasMany(File::class);
    }

    public function projek(){
        return $this->belongsTo(Projek::class);
    }

    public function dosen(){
        return $this->belongsTo(Activity::class);
    }

    public function komentar(){
        return $this->hasMany(Komentar::class);
    }
}
