<?php

use App\Http\Controllers\OrmController;
use Illuminate\Support\Facades\Route;

Route::get('ormconsultas',[OrmController::class,'consultas']);

