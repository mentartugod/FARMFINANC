<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class hen extends Model
{
    public function animal_productions(){
        return $this->belongsTo('App\Models\animal_production');
        
    }

}
