<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\Kontak;
use App\Http\Controllers\tentang;
use App\Http\Controllers\Form;
use App\Http\Controllers\MotorController;
use App\Http\Controllers\MobilController;
use App\Http\Controllers\MobilHome;

route::resource('/',WelcomeController::class);
route::resource('/contact',Kontak::class);
route::resource('/about',tentang::class);
route::resource('/form',Form::class);
route::resource('/motor',MotorController::class);
route::resource('/mobil',MobilController::class);



