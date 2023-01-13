<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class File extends Model
{
    use HasFactory;

    protected $fillable = ["docs_original_name", "docs_parsed_name", "pdf_name", "activity_id"];

    public function activiy(){
        return $this->belongsTo(Activity::class);
    }
}
