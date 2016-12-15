<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{


    public function users(){
        return $this->belongsTo(User::class);
    }

    public function business(){
        return $this->belongsTo(Business::class);
    }
    
}
