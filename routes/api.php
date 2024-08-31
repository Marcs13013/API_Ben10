<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/', function(){return response()->json(['Sucesso'=>true]);});
Route::get('/Aliens',[AlienController::class,'index']);
Route::get('/Aliens/{codigo}',[AlienController::class,'show']);
Route::post('/Aliens',[AlienController::class,'store']);
Route::put('/Aliens/{codigo}',[AlienController::class,'update']);
Route::delete('/Aliens/{codigo}',[AlienController::class,'destroy']);