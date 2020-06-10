<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable {

    use Notifiable, Followable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'username',
        'name',
        'avatar',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /* get avatar of the user */
    public function getAvatarAttribute($value)
    {
        return asset($value ? '/storage/' . $value : '/images/default-avatar.jpg');
    }

    /* when storing or updating database, password should always Hashed */
    public function setPasswordAttribute($value)
    {
        return $this->attributes['password'] = bcrypt($value);
    }

    /* get users timeline */
    public function timeline()
    {
        // include all of the user's tweets
        // as well as of the tweets of everyone
        // they follow...in descending order by date

        $friends = $this->follows()->pluck('id');

        return Tweet::whereIn('user_id', $friends)
            ->orWhere('user_id', $this->id)
            ->withLikes()
            ->latest()
            ->paginate(50);
    }

    /* get user tweets */
    public function tweets()
    {
        return $this->hasMany(Tweet::class)->latest();
    }

    /* a path to the model */
    public function path($append = '')
    {
        $path = route('profile', $this);

        return $append ? "{$path}/{$append}" : $path;
    }

}
