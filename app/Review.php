<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Review extends Model {

    protected $guarded = [];

    public function user() {
        return $this->belongsTo( User::class )
                    ->where( 'role', 'member' );
    }

    public function business() {
        return $this->belongsTo( User::class, 'business_id' )
                    ->where( 'role', 'business' );
    }

    public function scopeNewestFirst( $query ) {
        return $query->orderBy( 'created_at', 'desc' );
    }

}
