<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\animal_production;
use App\Models\avocado_crop;
use App\Models\cattle;
use App\Models\coffe_crop;
use App\Models\crop;
use App\Models\finance;
use App\Models\hen;
use App\Models\recommendation;
use App\Models\User;
use App\Models\user_app;
use Illuminate\Http\Request;


class OrmController extends Controller
{
    public function consultas(){
        $user = user_app::find(1);
        return $user;
    }
}

