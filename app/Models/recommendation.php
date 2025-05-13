<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class recommendation extends Model
{
     public function users(){
        return $this->belongsTo('App\Models\user_app');
        
    }
   
}
