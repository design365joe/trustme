<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable {

    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'role',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function reviewsMade() {
        return $this->hasMany( Review::class );
    }

    public function reviewsOf() {
        return $this->hasMany( Review::class, 'business_id' );
    }

    public function scopeBusinesses( $query ) {
        return $query->where( 'role', 'business' );
    }

    public function isMember() {
        return $this->role === 'member';
    }
}
