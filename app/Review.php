<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Review extends Model {

    protected $guarded = [];

    public function user() {
        return $this->belongsTo( User::class );
    }

    public function business() {
        return $this->belongsTo( Business::class );
    }

    public function scopeNewestFirst( $query ) {
        return $query->orderBy( 'created_at', 'desc' );
    }

}
