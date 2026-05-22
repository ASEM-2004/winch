<?php

use App\Http\Controllers\CustomerController;
use App\Http\Controllers\ProfileController;
use App\Models\Country;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/index', [ProfileController::class,'index']);

Route::get('/index1', [CustomerController::class,'index1']);

Route::get('/test',function(){
    $country = Country::find(1);
    $posts =$country->posts;
    return $posts;
});


