<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class animal_production extends Model
{
    public function users(){
        return $this->belongsTo('App\Models\user_app');

    }
    public function finance(){
        return $this->hasOne('App\Models\finance');

        
    }
    public function cattle(){
        return $this->hasMany('App\Models\cattle');
        
        
    }
    public function hen(){
        return $this->hasMany('App\Models\hen');
        
        
    }
    
}
