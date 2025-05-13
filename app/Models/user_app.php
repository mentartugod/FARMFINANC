<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class user_app extends Model
{
    public function crops(){
    return $this->belongsToMany('App\Models\crop');
}

    public function recommendation(){
        return $this->hasMany('App\Models\recommendation');
        
    }
    public function finances(){
        return $this->belongsToMany('App\Models\finance');
        
    }
    public function animal_production(){
        return $this->hasMany('App\Models\animal_production');
        
    }

}
