<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\Kontak;
use App\Http\Controllers\tentang;

route::resource('/',WelcomeController::class);
route::resource('/contact',Kontak::class);
route::resource('/about',tentang::class);



