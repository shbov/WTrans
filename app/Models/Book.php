<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;
    
    public function category()
    {
        return $this->belongsTo('App\Models\Category', 'category_id');
    }

    public function language()
    {
        return $this->belongsTo('App\Models\Language', 'language_id');
    }

    public function nativeLanguage()
    {
        return $this->belongsTo('App\Models\Language', 'native_language_id');
    }
}
