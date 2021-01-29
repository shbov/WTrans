<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Book extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'native_name',
        'desc',

        'language_id',
        'native_language_id',
        'category_id'
    ];

    // Relations

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

    public function users()
    {
        return $this->belongsToMany(User::class)->withTimestamps();
    }

    // is in ...
    public function isBookMember($user_id)
    {
        return $this->users()->where('user_id', $user_id)->exists();
    }

    public function isBookOwner($user_id)
    {
        return $this->created_by == $user_id;
    }

    public function owner()
    {
        return User::find($this->created_by);
    }
    // Scopes

    public function scopeGetBooksByCategory($query, $category_id)
    {
        return $query->where('category_id', $category_id);
    }
}
