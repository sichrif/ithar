<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class post extends Model
{
    protected $guarded = [];
    public function user(){
        return $this->belongsTo(User::class);
    }
    public function image(){
        return $this->hasMany(image::class);
    }
    public function donation(){
        return $this->hasMany(Donation::class);
    }
}
