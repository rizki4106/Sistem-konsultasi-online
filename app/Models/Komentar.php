<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Komentar extends Model
{
    use HasFactory;

    protected $fillable = ["user_id", "activity_id", "body"];

    public function activity(){
        return $this->belongsTo(Activity::class);
    }

    public function user(){
        return $this->belongsTo(Pengguna::class);
    }
}
