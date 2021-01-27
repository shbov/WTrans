<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

/**
 * Class Book
 * @package App\Models
 */
class Book extends Model
{
    use HasFactory;

    /**
     * @var string[]
     */
    protected $fillable = [
        'name',
        'native_name',
        'desc',

        'language_id',
        'native_language_id',
        'category_id'
    ];

    protected static function boot()
    {
        parent::boot();

        if (Auth::user()) {
            static::creating(function ($model) {
                $model->created_by = Auth::user()->id;

                Auth::user()->books()->attach($model->id);
            });

            self::created(function ($model) {
                Auth::user()->books()->attach($model->id);
            });

            self::deleting(function () {
                Auth::user()->books()->detach();
            });
        }
    }

    // Relations

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function category()
    {
        return $this->belongsTo('App\Models\Category', 'category_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function language()
    {
        return $this->belongsTo('App\Models\Language', 'language_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function nativeLanguage()
    {
        return $this->belongsTo('App\Models\Language', 'native_language_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function users()
    {
        return $this->belongsToMany(User::class);
    }

    // is in ...

    /**
     * @param $user_id
     * @return bool
     */
    public function isBookMember($user_id)
    {
        return $this->users()->where('user_id', $user_id)->exists();
    }

    /**
     * @param $user_id
     * @return bool
     */
    public function isBookOwner($user_id)
    {
        return $this->created_by == $user_id;
    }

    // Scopes

    /**
     * @param $query
     * @param $category_id
     * @return mixed
     */
    public function scopeGetBooksByCategory($query, $category_id)
    {
        return $query->where('category_id', $category_id);
    }
}
