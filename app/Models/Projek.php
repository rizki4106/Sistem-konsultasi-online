<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Projek extends Model
{
    use HasFactory;

    protected $fillable = ["user_id", "dosen_id", "judul", 'slug', "objek", "nomor_sk", "dimulai_pada", "selesai_pada"];

    public function user(){
        return $this->belongsTo(Pengguna::class);
    }

    public function dosen(){
        return $this->belongsTo(Pengguna::class);
    }
}
