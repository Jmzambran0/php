<?php

use App\Http\Controllers\ContactoController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::prefix("app")->group(function(){
    Route::controller(ContactoController::class)->group(function(){
        Route::get("contactos", "index");
        Route::get("contacto/{id}", "show");
        Route::post("contacto", "store");
        Route::put("contacto/{id}", "update");
        Route::delete("contacto/{id}", "destroy");
    });
});