<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Business extends Model
{
    //

    public function reviews(){
        return $this->hasMany(Review::class);
    }
}
