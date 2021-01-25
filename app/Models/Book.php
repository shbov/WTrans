<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    public function language()
    {
        return $this->belongsTo('App\Models\Language', 'language_id');
    }

    public function originalLanguage()
    {
        return $this->belongsTo('App\Models\Language', 'original_language_id');
    }
}
