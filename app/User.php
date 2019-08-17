<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Str;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
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

    /**
     * Get avatar attribute based on email.
     * It tries to grabs the avatar from online service www.gravatar.com.
     *
     * @see  config/services.php
     * @return string|null
     */
    public function getAvatarAttribute(): ?string
    {
        $gravatarUrl = config('services.gravatar.url');

        if ($gravatarUrl && Str::contains($gravatarUrl, ['{hash}'])) {
            return str_replace('{hash}', md5(strtolower(trim($this->email))), $gravatarUrl);
        }

        return null;
    }
}
