<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class finance extends Model
{
   public function finances(){
        return $this->belongsToMany('App\Models\finance');
        
    }
    public function animal_production(){
        return $this->belongsTo('App\Models\animal_production');
        
    }


}
