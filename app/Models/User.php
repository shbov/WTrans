<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Laravel\Jetstream\HasProfilePhoto;
use Spatie\Permission\Traits\HasRoles;
use Lab404\Impersonate\Models\Impersonate;
use Laravel\Sanctum\HasApiTokens;
use Laravel\Jetstream\HasTeams;
use App\Traits\Jetstream\HasNoPersonalTeams;

class User extends Authenticatable
{
    use HasApiTokens;
    use HasFactory;
    use HasProfilePhoto;
    use HasRoles;
    use Impersonate;
    use Notifiable;
    use TwoFactorAuthenticatable;
    use SoftDeletes;
    use HasTeams;

    use HasNoPersonalTeams {
        HasNoPersonalTeams::ownsTeam insteadof HasTeams;
        HasNoPersonalTeams::isCurrentTeam insteadof HasTeams;
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
        'two_factor_recovery_codes',
        'two_factor_secret',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * The accessors to append to the model's array form.
     *
     * @var array
     */
    protected $appends = [
        'profile_photo_url',
    ];

    // Relations

    public function books()
    {
        return $this->belongsToMany(Book::class)->withTimestamps();
    }

    public function belongsToAnyTeam()
    {
        return (bool) optional($this->allTeams())->isNotEmpty();
    }

    // Join & leave

    public function joinBook(Book $book): void
    {
        $book->users()->attach($this->id);
        // $this->givePermissionTo('books.view.' . $book->id);
    }

    public function leaveBook(Book $book): void
    {
        $book->users()->detach($this->id);
        // $this->revokePermissionTo('books.view.' . $book->id);
    }
}
