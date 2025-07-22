<?php

use App\Http\Controllers\Home;
use App\Http\Controllers\HomeWeb;
use App\Http\Controllers\About;
use App\Http\Controllers\Contact;
use Illuminate\Support\Facades\Route;

route::resource('home', Home::class);
route::resource('about', About::class);
route::resource('contact', Contact::class);
route::resource('web', HomeWeb::class);



Route::get('/', function () {
    return view('welcome');
});