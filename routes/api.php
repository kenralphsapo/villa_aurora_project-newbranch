<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

//create Route:
//is case sensitive, must use proper casing
//function name is store, to be placed on route

Route::prefix("users")->group(function(){
    //POST: http://localhost:8000/api/users Register
    Route::post("/", [App\Http\Controllers\UserController::class, 'store']);

    //GET: http://localhost:8000/api/users  showAll
    Route::get("/", [App\Http\Controllers\UserController::class, 'index']);

    //GET: http://localhost:8000/api/users/{user} showSpecific
    Route::get("/{user}", [App\Http\Controllers\UserController::class, 'show']);

    //PATCH: http://localhost:8000/api/users/{user}
    Route::PATCH("/{user}", [App\Http\Controllers\UserController::class, 'update']);

    //DELETE: http://localhost:8000/api/users/{user}
    Route::delete("/{user}", [App\Http\Controllers\UserController::class, 'destroy']);

});
//POST: http://localhost:8000/api/login
Route::post("/login", [App\Http\Controllers\AuthController::class,'login']);



Route::prefix("services")->group(function(){
    //POST: http://localhost:8000/api/services Register
    Route::post("/", [App\Http\Controllers\ServiceController::class, 'addService']);

    //GET: http://localhost:8000/api/services  showAll
    Route::get("/", [App\Http\Controllers\UserController::class, 'showAllServices']);

    //GET: http://localhost:8000/api/services {service} showSpecific
    Route::get("/{service}", [App\Http\Controllers\serviceController::class, 'showService']);

    //PATCH: http://localhost:8000/api/services/{service}
    Route::PATCH("/{service}", [App\Http\Controllers\serviceController::class, 'updateService']);

    //DELETE: http://localhost:8000/api/services/{service}
    Route::delete("/{service}", [App\Http\Controllers\serviceController::class, 'destroyService']);    
});
