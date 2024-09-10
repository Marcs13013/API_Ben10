<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/', function(){return response()->json(['Sucesso'=>true]);});
Route::get('/aliens',[AlienController::class,'index']);
Route::get('/aliens/{codigo}',[AlienController::class,'show']);
Route::post('/aliens',[AlienController::class,'store']);
Route::put('/aliens/{codigo}',[AlienController::class,'update']);
Route::delete('/aliens/{codigo}',[AlienController::class,'destroy']);